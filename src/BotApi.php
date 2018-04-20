<?php

namespace TelegramBot\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Stream;
use Psr\Http\Message\ResponseInterface;
use TelegramBot\Api\Entities\BaseEntity;
use TelegramBot\Api\Exceptions\HttpException;
use TelegramBot\Api\Exceptions\TelegramException;
use TelegramBot\Api\Extension\InputFile;
use TelegramBot\Api\Methods\BaseMethod;
use TelegramBot\Api\Methods\getFile;
use TelegramBot\Api\Methods\getUpdates;
use TelegramBot\Api\Types\File;
use TelegramBot\Api\Types\Message;
use TelegramBot\Api\Types\ResponseParameters;
use TelegramBot\Api\Types\Update;
use function array_key_exists;
use function method_exists;

/**
 * Class BotApi
 *
 * @package TelegramBot\Api
 */
class BotApi
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
    public static function curlValidate(ResponseInterface $response, array $json)
    {
        if (($httpCode = $response->getStatusCode()) &&
            !in_array($httpCode, [self::DEFAULT_STATUS_CODE, self::NOT_MODIFIED_STATUS_CODE])) {
            $errorDescription = array_key_exists('description', $json) ? $json['description'] : self::$codes[$httpCode];
            $errorParameters = array_key_exists('parameters', $json) ? $json['parameters'] : [];
            throw new HttpException($errorDescription, $httpCode, null, $errorParameters);
        }
    }

    public function isWebhookIPTrusted($ip)
    {
        // https://core.telegram.org/bots/webhooks#the-short-version
        $telegram_ip_lower = '149.154.167.197';
        $telegram_ip_upper = '149.154.167.233';

        $lower_dec = (float)sprintf("%u", ip2long($telegram_ip_lower));
        $upper_dec = (float)sprintf("%u", ip2long($telegram_ip_upper));
        $ip_dec = (float)sprintf("%u", ip2long($ip));
        if ($ip_dec < $lower_dec || $ip_dec > $upper_dec) {
            return false;
        }
        return true;
    }

    /**
     * @param $lastOffset
     * @throws TelegramException
     */
    public function clearUpdates($lastOffset)
    {
        getUpdates::create($this)->setOffset($lastOffset + 1)->execute();
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
     * @param Update $update
     * @param string $eventName
     * @throws BotanException
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
     * @param Message $message
     * @param string $eventName
     * @throws BotanException
     */
    public function track(Message $message, $eventName = 'Message')
    {
        if ($this->tracker instanceof Botan) {
            $this->tracker->track($message, $eventName);
        }
    }

    /**
     * @param $fileId string|File
     * @return string
     * @throws TelegramException
     */
    public function getFileDownloadUrl($fileId)
    {
        if ($fileId instanceof File) {
            $file = $fileId;
        } else {
            $file = getFile::create($this)->setFileId($fileId)->execute();
        }
        $url = $this->getFileUrl() . '/' . $file->getFilePath();
        return $url;
    }

    /**
     * @param $fileId string|File
     * @param $saveFile
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws TelegramException
     */
    public function downloadFile($fileId, $saveFile)
    {
        $url = $this->getFileDownloadUrl($fileId);
        return $this->httpClient->request('GET', $url, ['sink' => $saveFile]);
    }

    /**
     * @param $fileId string|File
     * @param $saveFile
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws TelegramException
     */
    public function downloadFileContents($fileId)
    {
        $url = $this->getFileDownloadUrl($fileId);
        return $this->httpClient->request('GET', $url);
    }

    /**
     * @param BaseMethod $method
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws TelegramException
     */
    public function execute(BaseMethod $method)
    {
        $action = $method->getMethod();
        $result = null;
        $request_params = self::setUpRequestParams($method->getData());
        try {
            $response = $this->httpClient->post($this->getUrl() . '/' . $action, $request_params);
            $result = (string)$response->getBody();
        } catch (RequestException $e) {
            $result = ($e->getResponse()) ? (string)$e->getResponse()->getBody() : '';
        }
        if (empty($result)) {
            throw new TelegramException("Empty result received.");
        }
        $result = json_decode($result, true) ?: [];
        if (isset($result['parameters'])) {
            //Handling retry after!
            $parameters = new ResponseParameters($result['parameters'], $this);
            if ($parameters->getRetryAfter() > 0) {
                sleep($parameters->getRetryAfter());
                return $method->execute($this);
            }
        }
        self::curlValidate($response, $result);
        if ($result['ok']) {
            if (method_exists($method, 'toResult')) {
                return $method->toResult($result['result']);
            }
        }
        throw new TelegramException(sprintf('%s %s', $result['error_code'], $result['description']));
    }

    private static function setUpRequestParams(array $data)
    {
        $has_resource = false;
        $multipart = [];
        // Convert any nested arrays into JSON strings.
        array_walk($data, function (&$item) {
            if ($item instanceof BaseEntity) {
                $item = $item->toArray();
            }
            is_array($item) && $item = json_encode($item);
        });
        //Reformat data array in multipart way if it contains a resource
        foreach ($data as $key => $item) {
            if ($item instanceof InputFile) {
                $has_resource = true;
                $multipart[] = array_merge($item->getMultipartData(), ['name' => $key]);
                continue;
            }
            $has_resource |= (is_resource($item) || $item instanceof Stream);
            $multipart[] = ['name' => $key, 'contents' => $item];
        }
        if ($has_resource) {
            return ['multipart' => $multipart];
        }
        return ['form_params' => $data];
    }
}