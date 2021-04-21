<?php

require("vendor/autoload.php");

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

$logger = new Logger('app');
$logger->pushHandler(new StreamHandler(__DIR__.'/app.log', Logger::DEBUG));
$logger->pushHandler(new FirePHPHandler());

$logger->info(serialize($_POST));