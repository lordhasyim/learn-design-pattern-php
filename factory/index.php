<?php 

require('load.php');

$factory = new TextFactory(new AdapterFactory);
$text = $factory->make(TextEnum::XML);

$json = [
    'author' => 'mamat', 
    'hobi' => 'ngopi'
];

echo $text->output($json);
echo PHP_EOL;