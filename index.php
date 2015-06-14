<?php

require 'config.php';
require 'util/Auth.php';

function __autoload($class)
{
    require LIBS . $class . ".php";
}

$bootstrap = new Bootstrap();

// Optional Path Settings
// $bootstrap->setControllerPath('controllers/');
// $bootstrap->setModelPath('models/');
// $bootstrap->setDefaultFile('d.php');
// $bootstrap->setErrorFile('e.php');

$bootstrap->init();