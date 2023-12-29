<?php
require 'vendor/autoload.php';
use classe\mate\Basic;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$m = new Basic();
echo $m ->somar(2345,45);

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('test.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');