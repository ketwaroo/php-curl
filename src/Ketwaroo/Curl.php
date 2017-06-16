<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ketwaroo;

use Ketwaroo\Curl\Option;

/**
 * Single curl connection.
 *
 * @author Yaasir Ketwaroo<ketwaroo.yaasir@gmail.com>
 */
class Curl
{

    /**
     *
     * @var Option
     */
    protected $options;
    protected $connection = NULL;
    protected $connected  = false;
    protected $url        = NULL;

    public function __construct($url, Option $options = null)
    {
        $this->setOptions($options)
            ->setUrl($url);
    }

    public function __destruct()
    {
        if (!empty($this->connection))
        {
            curl_close($this->connection);
        }
    }

    public function getUrl(array $params = [], $separator = '&')
    {
        return $this->url . (!empty($params) ? ((FALSE === strrpos($this->url, '?') ? '?' : '&') . http_build_query($params, null, $separator)) : '');
    }

    public function setUrl($url)
    {
        $this->url = $url;

        $this->getOptions()
            ->setUrl($url);

        return $this;
    }

    /**
     * 
     * @return Option
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * 
     * @param Option $options
     * @return \Ketwaroo\Curl
     */
    public function setOptions(Option $options = NULL)
    {
        if (is_null($options))
        {
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
    public function withOptions(Option $option)
    {
        $cu = clone $this;
        $cu->setOptions($options);
        return $cu;
    }

    protected function getConnection($resetUrl = true)
    {
        if (empty($this->connection))
        {
            $this->connection = curl_init($this->getUrl());
            $this->connected  = true;
        }
        if ($resetUrl)
        {
            $this->getOptions()->setUrl($this->getUrl());
        }
        return $this->connection;
    }

    public function isConnected()
    {
        return $this->connected;
    }

    /**
     * 
     * @param array $params
     * @return Curl\Response
     */
    public function httpMethodGet(array $params = [])
    {
        $conn = $this->getConnection();

        $opt = $this->getOptions();
        $opt->setHttpget(TRUE)
            ->setUrl($this->getUrl($params));

        return $this->dispatch();
    }

    /**
     * 
     * @param array $params
     * @param array|string $body
     * @return Curl\Response
     */
    public function httpMethodPost(array $params = [], $body = '')
    {
        $conn = $this->getConnection();

        $opt = $this->getOptions();
        $opt->setPost(TRUE)
            ->setUrl($this->getUrl($params))
            ->setPostfields(is_array($body) ? http_build_query($body) : $body);

        return $this->dispatch();
    }

    /**
     * 
     * @return Curl\Response
     */
    public function dispatch()
    {
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
        if (FALSE === $body)
        {
            throw new \Exception('Error dispatching. ' . curl_error($conn));
        }
        return new Curl\Response($conn, $body, $headers);
    }

}
