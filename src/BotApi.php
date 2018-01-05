<?php

namespace TelegramBot\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use function lcfirst;
use ReflectionClass;
use ReflectionException;
use function strtolower;
use TelegramBot\Api\Extension\KeyboardBuilder;
use TelegramBot\Api\Types\File;
use TelegramBot\Api\Types\ForceReply;
use TelegramBot\Api\Types\InlineKeyboardButton;
use TelegramBot\Api\Types\InlineKeyboardMarkup;
use TelegramBot\Api\Types\KeyboardButton;
use TelegramBot\Api\Types\Message;
use TelegramBot\Api\Types\ReplyKeyboardMarkup;
use TelegramBot\Api\Types\ReplyKeyboardRemove;
use TelegramBot\Api\Types\Update;

/**
 * Class BotApi
 *
 * @package TelegramBot\Api
 */
class BotApi extends MethodFunctions
{
    /**
     * HTTP codes
     *
     * @var array
     */
    public static $codes = [
        // Informational 1xx
        100 => 'Continue',
        101 => 'Switching Protocols',
        102 => 'Processing',            // RFC2518
        // Success 2xx
        200 => 'OK',
        201 => 'Created',
        202 => 'Accepted',
        203 => 'Non-Authoritative Information',
        204 => 'No Content',
        205 => 'Reset Content',
        206 => 'Partial Content',
        207 => 'Multi-Status',          // RFC4918
        208 => 'Already Reported',      // RFC5842
        226 => 'IM Used',               // RFC3229
        // Redirection 3xx
        300 => 'Multiple Choices',
        301 => 'Moved Permanently',
        302 => 'Found', // 1.1
        303 => 'See Other',
        304 => 'Not Modified',
        305 => 'Use Proxy',
        // 306 is deprecated but reserved
        307 => 'Temporary Redirect',
        308 => 'Permanent Redirect',    // RFC7238
        // Client Error 4xx
        400 => 'Bad Request',
        401 => 'Unauthorized',
        402 => 'Payment Required',
        403 => 'Forbidden',
        404 => 'Not Found',
        405 => 'Method Not Allowed',
        406 => 'Not Acceptable',
        407 => 'Proxy Authentication Required',
        408 => 'Request Timeout',
        409 => 'Conflict',
        410 => 'Gone',
        411 => 'Length Required',
        412 => 'Precondition Failed',
        413 => 'Payload Too Large',
        414 => 'URI Too Long',
        415 => 'Unsupported Media Type',
        416 => 'Range Not Satisfiable',
        417 => 'Expectation Failed',
        422 => 'Unprocessable Entity',                                        // RFC4918
        423 => 'Locked',                                                      // RFC4918
        424 => 'Failed Dependency',                                           // RFC4918
        425 => 'Reserved for WebDAV advanced collections expired proposal',   // RFC2817
        426 => 'Upgrade Required',                                            // RFC2817
        428 => 'Precondition Required',                                       // RFC6585
        429 => 'Too Many Requests',                                           // RFC6585
        431 => 'Request Header Fields Too Large',                             // RFC6585
        // Server Error 5xx
        500 => 'Internal Server Error',
        501 => 'Not Implemented',
        502 => 'Bad Gateway',
        503 => 'Service Unavailable',
        504 => 'Gateway Timeout',
        505 => 'HTTP Version Not Supported',
        506 => 'Variant Also Negotiates (Experimental)',                      // RFC2295
        507 => 'Insufficient Storage',                                        // RFC4918
        508 => 'Loop Detected',                                               // RFC5842
        510 => 'Not Extended',                                                // RFC2774
        511 => 'Network Authentication Required',                             // RFC6585
    ];


    /**
     * Default http status code
     */
    const DEFAULT_STATUS_CODE = 200;

    /**
     * Not Modified http status code
     */
    const NOT_MODIFIED_STATUS_CODE = 304;

    /**
     * Limits for tracked ids
     */
    const MAX_TRACKED_EVENTS = 200;

    /**
     * Url prefixes
     */
    const URL_PREFIX = 'https://api.telegram.org/bot';

    /**
     * Url prefix for files
     */
    const FILE_URL_PREFIX = 'https://api.telegram.org/file/bot';

    /**
     * CURL object
     *
     * @var
     */
    protected $curl;

    /**
     * Bot token
     *
     * @var string
     */
    protected $token;

    /**
     * Botan tracker
     *
     * @var \TelegramBot\Api\Botan
     */
    protected $tracker;

    /**
     * list of event ids
     *
     * @var array
     */
    protected $trackedEvents = [];

    /**
     * Check whether return associative array
     *
     * @var bool
     */
    protected $returnArray = true;

    protected $httpClient;

    /**
     * Constructor
     *
     * @param string $token Telegram Bot API token
     * @param string|null $trackerToken Yandex AppMetrica application api_key
     */
    public function __construct($token, $trackerToken = null)
    {
        $this->token = $token;
        $this->httpClient = new Client([
            'base_uri' => $this->getUrl() . '/',
            'verify' => false,
            'http_errors' => false,
        ]);
        if ($trackerToken) {
            $this->tracker = new Botan($trackerToken);
        }
    }

    /**
     * Response validation
     *
     * @param resource $curl
     * @param string $response
     * @throws HttpException
     */
    public static function curlValidate($curl, $response = null)
    {
        $json = json_decode($response, true) ?: [];
        if (($httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE))
            && !in_array($httpCode, [self::DEFAULT_STATUS_CODE, self::NOT_MODIFIED_STATUS_CODE])
        ) {
            $errorDescription = array_key_exists('description', $json) ? $json['description'] : self::$codes[$httpCode];
            $errorParameters = array_key_exists('parameters', $json) ? $json['parameters'] : [];
            throw new HttpException($errorDescription, $httpCode, null, $errorParameters);
        }
    }


    private function createMultipart(BaseMethod $method)
    {
        $multipart = [];
        $data = $method->toJson(true);
        foreach ($data as $key => $arg) {
            if (is_array($arg)) {
                $arg = \json_encode($arg);
            }
            $multipart[] = ['name' => $key, 'contents' => $arg];
        }
        return $multipart;
    }

    /**
     * @param $method
     * @param $args
     * @param bool $async
     * @return \GuzzleHttp\Promise\PromiseInterface|\Psr\Http\Message\ResponseInterface
     * @throws HttpException
     * @throws TelegramException
     */
    private function call(BaseMethod $method, $async = false)
    {
        $options = [];
        if ($method->hasInputFile()) {
            $options['multipart'] = $this->createMultipart($method);
        } else {
            $options['form_params'] = $method->toJson(true);
        }
        try {
            echo "Calling method {$method->getMethod()}";
            $response = $async ? $this->httpClient->postAsync($method->getMethod(), $options) : $this->httpClient->post($method->getMethod(), $options);
            if ($async) {
                return $response;
            }
            $httpCode = $response->getStatusCode();
            if (!in_array($httpCode, [self::DEFAULT_STATUS_CODE, self::NOT_MODIFIED_STATUS_CODE])) {
                $json = json_decode($response->getBody()->getContents(), true) ?: [];
                $errorDescription = array_key_exists('description', $json) ? $json['description'] : self::$codes[$httpCode];
                $errorParameters = array_key_exists('parameters', $json) ? $json['parameters'] : [];
                throw new HttpException($errorDescription, $httpCode, null, $errorParameters);
            }
            $body = \GuzzleHttp\json_decode($response->getBody()->getContents(), true);
            if (array_keys($body, 'ok') && false === (bool) $body['ok']) {
                throw new TelegramException($body['description'], $body['error_code']);
            }
            return $body['result'];
        } catch (ClientException $e) {
            throw new HttpException("Unable to make request: {$e->getMessage()}", $e->getCode(), $e);
        }
    }


    /**
     * @param $method
     * @param array $args
     * @param bool $async
     * @return \GuzzleHttp\Promise\PromiseInterface|\Psr\Http\Message\ResponseInterface
     * @throws HttpException
     * @throws TelegramException
     */
    private function callArr($method, array $args)
    {
        $args['keyValuePair'] = true;
        return $this->__call($method, $args);
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        return self::URL_PREFIX . $this->token;
    }

    /**
     * @return string
     */
    public function getFileUrl()
    {
        return self::FILE_URL_PREFIX . $this->token;
    }

    /**
     * @param \TelegramBot\Api\Types\Update $update
     * @param string $eventName
     *
     * @throws \TelegramBot\Api\TelegramException
     */
    public function trackUpdate(Update $update, $eventName = 'Message')
    {
        if (!in_array($update->getUpdateId(), $this->trackedEvents)) {
            $this->trackedEvents[] = $update->getUpdateId();
            $this->track($update->getMessage(), $eventName);
            if (count($this->trackedEvents) > self::MAX_TRACKED_EVENTS) {
                $this->trackedEvents = array_slice($this->trackedEvents, round(self::MAX_TRACKED_EVENTS / 4));
            }
        }
    }

    /**
     * Wrapper for tracker
     *
     * @param \TelegramBot\Api\Types\Message $message
     * @param string $eventName
     *
     * @throws \TelegramBot\Api\TelegramException
     */
    public function track(Message $message, $eventName = 'Message')
    {
        if ($this->tracker instanceof Botan) {
            $this->tracker->track($message, $eventName);
        }
    }


    private function createInstanceOfType($type, $arguments)
    {
        $declaration = $this->typeMap[$type];
        $instance = "\\TelegramBot\\Api\\Types\\$type";
        $instance = new $instance($this);
        /* @var $method BaseType */
        $params = array_combine(array_slice($declaration['paramsMap'], 0, sizeof($arguments)), $arguments);
        $instance->mergeData($params);
        return $instance;
    }

    /**
     * @param \TelegramBot\Api\Types\File|string $fileId
     * @return string
     */
    public function getFileDownloadUrl($fileId)
    {
        if ($fileId instanceof File) {
            $file = $fileId;
        } else {
            $file = $this->getFile($fileId);
        }
        $url = $this->getFileUrl() . '/' . $file->getFilePath();
        return $url;
    }

    /**
     * @param \TelegramBot\Api\Types\File|string $fileId
     * @param $saveFile
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function downloadFile($fileId, $saveFile)
    {
        $url = $this->getFileDownloadUrl($fileId);
        return $this->httpClient->request('GET', $url, ['sink' => $saveFile]);
    }

    /**
     * @param $method
     * @param $arguments
     * @return mixed
     * @throws TelegramException|InvalidJsonException|InvalidArgumentException
     */
    public function __call($method, $arguments)
    {
        if (strtolower(substr($method, 0, 6)) == 'create') {
            return $this->createInstanceOfType(substr($method, 6), $arguments);
        }
        $async = strtolower(substr($method, -5)) == 'async';
        $declaration = $this->methodMap[$method];
        $method = "\\TelegramBot\\Api\\Methods\\$method";
        $method = new $method($this);
        /* @var $method BaseMethod */
        if(isset($arguments['keyValuePair'])){
            $params = $arguments;
        } else {
            $params = array_combine(array_slice($declaration['paramsMap'], 0, sizeof($arguments)), $arguments);
        }
        $method->mergeData($params);
        try {
            $response = $this->call($method, $async);
        } catch (HttpException $e) {
            throw new TelegramException($e->getMessage(), $e->getCode());
        } catch (InvalidArgumentException $e) {
            throw $e;
        }
        try {
            $return = $declaration['returnType'];
            if (!is_array($declaration['returnType'])) {
                $return = [$declaration['returnType']];
            }
            foreach ($return as $returnType) {
                if (KeyValuePairStore::validateType($response, $returnType)) {
                    $response = KeyValuePairStore::getValueByType($response, $returnType, $this);
                    break;
                }
            }
        } catch (ReflectionException $e) {

        }
        return $response;
    }
}
