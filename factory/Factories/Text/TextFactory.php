<?php

class TextFactory implements Factory
{
    protected $adapter;

    public function __construct(AdapterFactory $adapter)
    {
        $this->adapter = $adapter;
    }

    public function make($config)
    {
        return new Text($this->adapter->make($config));
    }
}