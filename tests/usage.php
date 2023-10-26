<?php

require_once('..' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Logger.php');

use EasyLog\Logger;

// create a new logger with the file name "projectName.log"
$log = new Logger('projectName.log', true);

$log->debug('This is a debug message.');

$log->info('This is an informational message.');

$log->warning('This is a warning message.');

$log->error('This is an error message.');

$log->fatal('This is a fatal message.');
