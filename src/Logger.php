<?php

declare(strict_types=1);


/**
 * This is a lightweight logger library for PHP, which allows developers to easily log messages at different levels such as error, warning, and info.
 *
 * @version 1.0.0
 * @author Mr Afaz
 * @package neili
 * @copyright Copyright 2023 Neili library
 * @license https://opensource.org/licenses/MIT
 * @link https://github.com/imafaz/neili
 */

namespace EasyLog;

use Exception;

class Logger
{


    /**
     * log level types
     *
     * @constant int
     */
    const DEBUG = 1;
    const INFO = 2;
    const WARNING = 3;
    const ERROR = 4;
    const FATAL = 5;





    /**
     * logFile
     *
     * @var mixed
     */
    private $logFile;



    /**
     * printLog
     *
     * @var mixed
     */
    public $printLog;


    /**
     * __construct: setup logger
     *
     * @param  mixed $logFile
     * @param  mixed $printLog
     * @return void
     */
    public function __construct(string $logFile, bool $printLog = false)
    {
        $this->printLog = $printLog;
        $this->logFile = $logFile;
        if (function_exists('ini_set')) {
            ini_set('log_errors', '1');
            ini_set('error_log', $logFile);
        }
    }


    /**
     * setup logger property
     *
     * @param string $property
     * @param string $value
     * @return void
     */
    public function __set($property, $value)
    {
        if ($property == 'printLog') {
            $this->printLog = $value;
        } elseif ($property == 'logFile') {
            $this->logFile = $value;
            if (function_exists('ini_set')) {
                ini_set('log_errors', '1');
                ini_set('error_log', $this->logFile);
            }
        }
    }


    /**
     * writing/print log
     *
     * @param string $message
     * @param int $level
     * @return void
     */
    private function logging(string $message, int $level): void
    {
        $date = gmdate('d-M-Y H:i:s \U\T\C');
        if ($level == self::DEBUG) {
            $log = sprintf("[%s] [%s] %s\n", $date, 'DEBUG', $message);
        } elseif ($level == self::INFO) {
            $log = sprintf("[%s] [%s] %s\n", $date, 'INFO', $message);
        } elseif ($level == self::WARNING) {
            $log = sprintf("[%s] [%s] %s\n", $date, 'WARNING', $message);
        } elseif ($level == self::ERROR) {
            $log = sprintf("[%s] [%s] %s\n", $date, 'ERROR', $message);
        } elseif ($level == self::FATAL) {
            $log = sprintf("[%s] [%s] %s\n", $date, 'FATAL ERROR', $message);
            throw new Exception($message);
        } else {
            throw new Exception('invalid level type!');
        }
        if ($this->printLog) {
            print($log);
        }
        file_put_contents($this->logFile, $log, FILE_APPEND);
    }


    /**
     * logging debug
     *
     * @param  string $message
     * @return void
     */
    public function debug(string $message): void
    {
        $this->logging($message, self::DEBUG);
    }



    /**
     * logging info
     *
     * @param  string $message
     * @return void
     */
    public function info(string $message): void
    {
        $this->logging($message, self::INFO);
    }

    /**
     * logging warning
     *
     * @param  string $message
     * @return void
     */
    public function warning(string $message): void
    {
        $this->logging($message, self::WARNING);
    }


    /**
     * logging error
     *
     * @param  string $message
     * @return void
     */
    public function error(string $message): void
    {
        $this->logging($message, self::ERROR);
    }

    /**
     * fatal error
     *
     * @param  string $message
     * @return void
     */
    public function fatal(string $message): void
    {
        $this->logging($message, self::FATAL);
    }
}
