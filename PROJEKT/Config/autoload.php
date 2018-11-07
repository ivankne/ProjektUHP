<?php

function __autoload($class)
{
    if ($class == 'Connection') {
        require_once (__DIR__ . '/Config/Connection.php');
    }

    $class = str_replace(
        '\\',
        '/',
        $class
    );

    require_once ('./' . $class . '.php');
}
