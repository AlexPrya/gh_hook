<?php

require("vendor/autoload.php");

use Monolog\Logger;
use Monolog\Registry;


$logger = Registry::getInstance('app');
$logger->info('$_POST', $_POST);