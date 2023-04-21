<?php

namespace Ketwaroo\Curl;

/**
 * Description of Response
 *
 * @author Yaasir Ketwaroo
 */
class Response {

    protected $info, $header, $body;

    public function __construct($usedConnection, $returnedTransfer) {
        $this->info = curl_getinfo($usedConnection);

        $this->header = substr($returnedTransfer, 0, $this->info['header_size']);
        $this->body   = substr($returnedTransfer, $this->info['header_size']);
    }

    public function getInfo() {
        return $this->info;
    }

    public function getRequestUrl() {
        return $this->getInfo()['url'] ?? null;
    }

    public function getHeader() {
        return $this->header;
    }

    public function getHeaderParsed(): array {
        $headers = [];
        foreach (array_filter(preg_split('~\r\n+~', $this->getHeader())) as $line) {
            $split = explode(':', $line, 2);
            if (count($split) === 2) {
                $headers[trim(strtolower($split[0]))] = trim($split[1]);
            }
            else {
                $headers[] = $line;
            }
        }
        return $headers;
    }

    public function getBody() {
        return $this->body;
    }

    public function setInfo($info) {
        $this->info = $info;
        return $this;
    }

    public function setHeader($header) {
        $this->header = $header;
        return $this;
    }

    public function setBody($body) {
        $this->body = $body;
        return $this;
    }

}
