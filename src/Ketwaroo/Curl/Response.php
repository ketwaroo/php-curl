<?php

namespace Ketwaroo\Curl;

/**
 * Description of Response
 *
 * @author Yaasir Ketwaroo
 */
class Response
{

    protected $info, $header, $body;

    public function __construct($usedConnection, $returnedTransfer)
    {
        $this->info = curl_getinfo($usedConnection);

        $this->header = substr($returnedTransfer, 0, $this->info['header_size']);
        $this->body   = substr($returnedTransfer, $this->info['header_size']);
    }

    public function getInfo()
    {
        return $this->info;
    }

    public function getHeader()
    {
        return $this->header;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setInfo($info)
    {
        $this->info = $info;
        return $this;
    }

    public function setHeader($header)
    {
        $this->header = $header;
        return $this;
    }

    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

}
