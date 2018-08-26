<?php

class XMLAdapter implements TextAdapterInterface
{
    public function output($data)
    {
        $xml = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><data></data>');
        $this->convert_to_xml($data, $xml);

        return htmlentities($xml->asXML());
    }

    public function convert_to_xml($data, &$xml_data)
    {
        foreach($data as $key => $value){
            if(is_numeric($key)) {
                $key = 'item' . $key;
            }
            if(is_array($value)) {
                $subnode = $xml_data->addChild($key);
                $this->convert_to_xml($value, $subnode);
            } else {
                $xml_data->addChild("$key", htmlspecialchars("$value"));
            }
        }
    }
}