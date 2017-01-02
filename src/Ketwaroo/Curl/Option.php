<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ketwaroo\Curl;

/**
 * Description of Option
 *
 * @author Yaasir Ketwaroo<ketwaroo.yaasir@gmail.com>
 */
class Option
{

    use Option\TraitDefaultOptions;

    protected $option = [];

    public function configureConnection($connection)
    {
        $options = [];
        foreach ($this->option as $k => $v)
        {
            $options[constant($k)] = $v;
        };

        if (curl_setopt_array($connection, $options))
        {
            return $connection;
        }
        else
        {
            return false;
        }
    }

    /**
     * 
     * @param string $name
     * @param mixed $value
     * @param string $type
     * @return \Ketwaroo\Curl\Option
     */
    public function setOption($name, $value, $type = 'mixed')
    {
        if ($this->validateType($value, $type))
        {
            $this->option[$name] = $value;
        }
        else
        {
            trigger_error("Type mismatch for {$name}. Expected {$type} for " . var_export($value, true));
        }
        return $this;
    }

    /**
     * 
     * @param type $names
     * @return \Ketwaroo\Curl
     */
    public function clearOption($names)
    {
        $this->option = array_diff_key($this->option, array_flip((array) $names));
        return $this;
    }

    public function getOption($name)
    {
        return isset($this->option[$name]) ? $this->option[$name] : NULL;
    }

    /**
     * 
     * @param type $var
     * @param type $type
     * @return type
     */
    protected function validateType($var, $type)
    {
        $is = false;
        switch ($type)
        {
            case 'mixed':
                $is = true;
                break;
            case 'int':
                $is = is_int($var);
                break;
            case 'float':
                $is = is_float($var);
                break;
            case 'boolean':
                $is = is_bool($var);
                break;
            case 'array':
                $is = is_array($var);
                break;
            case 'string':
                $is = is_string($var);
                break;
            case 'resource':
                $is = is_resource($var);
                break;
            case 'closure':
                $is = is_callable($var);
                break;
        }
        return $is;
    }

}
