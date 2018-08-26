<?php

class JSONAdapter implements TextAdapterInterface
{
    public function output($data)
    {
        return json_encode($data);
    }

}