<?php
require './../../vendor/autoload.php';

use \classes\matematica\Basica;

$m = new Basica();

echo $m->somar(10,10);


// use Monolog\Logger;
// use Monolog\Handler\StreamHandler;


// // create a log channel
// $log = new Logger('name');
// $log->pushHandler(new StreamHandler('teste.log', Logger::WARNING));

// // add records to the log
// $log->warning('Foo');
// $log->error('Bar');