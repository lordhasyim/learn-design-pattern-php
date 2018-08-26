<?php
class Config
{
    protected $data = [
        'text' => [
            'default' => 'json'
        ]
    ];

    //text.default = 'json'
    public function get($keys)
    {
        $data = $this->data;
        $keys = $explode('.', $keys);
        foreach($keys as $key) {
            if(array_key_exists($key, $data)) {
                $data = $data[$key];
                continue;
            }
        }
        return $data;
    }
}