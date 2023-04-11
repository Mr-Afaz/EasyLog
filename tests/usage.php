<?php


require_once('..' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Logger.php');

use EasyLog\Logger;

// create a new logger with the file name "projectName.log"
$log = new Logger('projectName.log',true);

// log an error message
$log->error('An error occurred!');

// log a warning message
$log->warning('This is a warning!');

// log an informational message
$log->info('Some information for you!');