<?php

class Text 
{
    protected $adapter;

    public function __construct($adapter)
    {
        $this->adapter = $adapter;
    }

    public function output($data)
    {
        return $this->adapter->output($data);
    }

}