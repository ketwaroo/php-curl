<?php

namespace Ketwaroo;

use Ketwaroo\Curl\Option;

/**
 * Single curl connection.
 *
 * @author Yaasir Ketwaroo
 */
class Curl {

    /**
     *
     * @var Option
     */
    protected $options;
    protected $connection  = NULL;
    protected $connected   = false;
    protected $url         = NULL;
    protected $httpHeaders = [];

    public function __construct($url, Option $options = null) {
        $this->setOptions($options)
            ->setUrl($url);
    }

    public function __destruct() {
        if (!empty($this->connection)) {
            curl_close($this->connection);
        }
    }

    public function getUrl(array $params = [], $separator = '&') {
        return $this->url . (!empty($params) ? ((FALSE === strrpos($this->url, '?') ? '?' : '&') . http_build_query($params, "", $separator)) : '');
    }

    public function setUrl($url) {
        $this->url = $url;

        $this->getOptions()
            ->setUrl($url);

        return $this;
    }

    public function addHttpHeader(string $field, string $value): static {
        $this->httpHeaders[strtolower($field)] = $value;
        return $this;
    }

    public function getHttpHeaders(): array {
        return $this->httpHeaders;
    }

    public function setHttpHeaders(array $headers = []): static {
        $this->httpHeaders = $headers;
        return $this;
    }

    protected function buildHttpHeaders(array $extras = []): array {
        $h = [];
        foreach (array_merge($this->getHttpHeaders(), $extras) as $k => $v) {
            $h[] = trim((is_string($k) ? $k . ':' : '') . $v);
        }
        return array_filter($h, strlen(...));
    }

    /**
     * 
     * @return Option
     */
    public function getOptions() {
        return $this->options;
    }

    /**
     * 
     * @param Option $options
     * @return \Ketwaroo\Curl
     */
    public function setOptions(Option $options = NULL) {
        if (is_null($options)) {
            $options = new Option();
        }
        $this->options = $options;
        return $this;
    }

    /**
     * 
     * @param Option $option
     * @return static
     */
    public function withOptions(Option $option) {
        $cu = clone $this;
        $cu->setOptions($options);
        return $cu;
    }

    protected function getConnection($resetUrl = true) {
        if (empty($this->connection)) {
            $this->connection = curl_init($this->getUrl());
            $this->connected  = true;
        }
        if ($resetUrl) {
            $this->getOptions()->setUrl($this->getUrl());
        }
        return $this->connection;
    }

    public function isConnected() {
        return $this->connected;
    }

    /**
     * 
     * @param array $params
     * @return Curl\Response
     */
    public function httpMethodGet(array $params = []) {
        return $this->httpRequest('GET', $params);
    }

    /**
     * 
     * @param array $params
     * @param array|string $body
     * @return Curl\Response
     */
    public function httpMethodPost(array $params = [], $body = '') {
        return $this->httpRequest('POST', $params, $body);
    }

    /**
     * Post but with application/json body
     *
     * @param mixed $jsonData
     * @param array $params
     * @return Curl\Response
     */
    public function httpMethodPostJson($jsonData, array $params = []) {
        return $this->httpRequest('POST', $params, json_encode($jsonData), ['Content-Type' => 'application/json']);
    }

    /**
     * 
     * @param array $params
     * @param array|string $body
     * @return Curl\Response
     */
    public function httpMethodPut(array $params = [], $body = '') {
        return $this->httpRequest('PUT', $params, $body);
    }

    /**
     * 
     * @param array $params
     * @param array|string $body
     * @return Curl\Response
     */
    public function httpMethodDelete(array $params = [], $body = '') {
        return $this->httpRequest('DELETE', $params, $body);
    }

    /**
     * 
     * @param array $params
     * @param array|string $body
     * @return Curl\Response
     */
    public function httpDownloadFile(string $destination, array $params = [], $body = '', $method = 'GET') {
        return file_put_contents($destination, $this->httpRequest($method, $params, $body)->getBody());
    }

    /**
     * 
     * @param string Method GET|PUT|POST|DELETE
     * @param array $params
     * @param array|string $body
     * @param array $requestHeaders Additional request headers
     * @return Curl\Response
     */
    public function httpRequest($method, array $params = [], $body = '', array $requestHeaders = []) {
        $conn = $this->getConnection();
        $opt  = $this->getOptions();
        $opt->setCustomrequest($method)
            ->setUrl($this->getUrl($params))
            ->setHttpheader($this->buildHttpHeaders($requestHeaders))
            ->setCurlinfoHeaderOut(true)
            ->setPostfields($body);

        return $this->dispatch();
    }

    /**
     * 
     * @return Curl\Response
     */
    public function dispatch() {
        $conn    = $this->getConnection(false);
        $headers = [];
        $this->getOptions()
            ->setHeader(true)
            ->setVerbose(true)
            ->setReturntransfer(true)
            ->setFollowlocation(true)
            ->setCurlinfoHeaderOut(true)
            ->configureConnection($conn);
        $body    = curl_exec($conn);
        if (FALSE === $body) {
            throw new \Exception('Error dispatching. ' . curl_error($conn));
        }
        return new Curl\Response($conn, $body, $headers);
    }

}
