<?php
function load($class_name) {
    require './src/' . $class_name . '.php';
    
    echo $class_name;
}

spl_autoload_register('load');

$client3 = new Admin();

$string = 'bąbelki';

echo mb_strtoupper($string);