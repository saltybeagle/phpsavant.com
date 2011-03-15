<?php

set_include_path(__DIR__ . '/src' . PATH_SEPARATOR . __DIR__ . '/vendor/php');

function phpsavant_autoload($class)
{
    $class = str_replace('_', '\\', $class);
    require_once $class . '.php';
}

spl_autoload_register('phpsavant_autoload');
