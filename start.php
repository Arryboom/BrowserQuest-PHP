<?php
/**
 * run with command 
 * php start.php start
 */

ini_set('display_errors', 'on');
use Workerman\Worker;

require_once __DIR__ . '/Workerman/Autoloader.php';

Worker::$logFile = '/dev/null';

foreach(glob(__DIR__.'/Applications/*/start.php') as $start_file)
{
    require_once $start_file;
}

Worker::runAll();
