<?php

require_once('vendor/autoload.php');

error_reporting(0);

use Aspect\ApplicationAspectKernel;
use Aspect\User;

$applicationAspectKernel = ApplicationAspectKernel::getInstance();
$applicationAspectKernel->init(array(
        'includePaths' => array(
            __DIR__ . '/src/'
        )
));

$a = new User();
$name = "teste";
$email = "teste@teste.com";

$a->create($name, $email);