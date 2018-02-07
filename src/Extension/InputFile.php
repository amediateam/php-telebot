<?php
namespace TelegramBot\Api\Extension;
use CURLFile;
use GuzzleHttp\Handler\CurlFactory;
use function is_numeric;
use TelegramBot\Api\Exceptions\InvalidArgumentException;
use function is_readable;

class InputFile
{
    private $filename;
    private $post_name;
    private $mime_type;
    /**
     * InputFile constructor.
     * @param $filename
     * @param $mime_type
     * @param $post_name
     * @throws InvalidArgumentException
     */
    public function __construct($filename, $post_name = null, $mime_type = null)
    {
        if (!is_file($filename)) {
            throw new InvalidArgumentException('File "' . $filename . '" does not exists.');
        } else if (!is_readable($filename)) {
            throw new InvalidArgumentException('File "' . $filename . '" is not readable.');
        }
        $this->filename = $filename;
        $this->post_name = $post_name;
        $this->mime_type = $mime_type;
    }

    public function getMultipartData()
    {
        $arr = [
            'contents' => $this->getStream(),
        ];
        if(!is_numeric($this->post_name)){
            $arr['filename'] = $this->post_name;
        }
        if(!is_numeric($this->mime_type)){
            $arr['mime_type'] = $this->mime_type;
        }
        return $arr;
    }

    public function getStream()
    {
        return fopen($this->filename, 'r');
    }
}