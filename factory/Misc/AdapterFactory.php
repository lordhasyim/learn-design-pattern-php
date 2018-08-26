<?php
class AdapterFactory
{
    public function make($config)
    {
        if ($config instanceOf Config)
        {
            switch($config->get('text.default')) {
                case 'json':
                    return new JSONAdapter;
                case 'xml' :
                    return new XMLAdapter;
                case 'csv':
                    return new CSVAdapter; 
            }
        } else {
            switch($config) {
                 case TextEnum::JSON :
                    return new JSONAdapter;
                case TextEnum::XML :
                    return new XMLAdapter;
                case TextEnum::CSV :
                    return new CSVAdapter;
            }
        }
    }
}