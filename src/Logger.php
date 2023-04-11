<?php

error_reporting(0);
ini_set('display_errors', 0);

/*
*  Logger.php module
*
*  The MIT License (MIT)
* 
*  Permission is hereby granted, free of charge, to any person obtaining a copy of this software
*  and associated documentation files (the "Software"), to deal in the Software without restriction,
*  including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
*  and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so,
*  subject to the following conditions:
* 
*  The above copyright notice and this permission notice shall be included in all copies or substantial
*  portions of the Software.
* 
*  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED
*  TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
*  THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
*  TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*
*  @author Abolfazl Majidi (MrAfaz)
*  @copyright Copyright (c) 2023 MrAfaz <mrafaz.com>
*  @license https://opensource.org/licenses/MIT
*/



namespace EasyLog;


class Logger
{

    const ERROR = 'ERROR';
    const WARNING = 'WARNING';
    const INFO = 'INFO';

    
    
    
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
    private $printLog;
    
    
    /**
     * __construct: setup logger
     *
     * @param  mixed $logFile
     * @param  mixed $printLog
     * @return void
     */
    public function __construct(string $logFile,bool $printLog = false){
        $this->logFile = $logFile;
        $this->printLog = $printLog;
    }
    
    
    /**
     * log: write and print logs
     *
     * @param  mixed $message
     * @param  mixed $level
     * @return void
     */
    public function log(string $message, string $level = self::INFO): void
    {
        $log = sprintf("[%s] [%s] %s\n", date('Y-m-d H:i:s'),$level, $message);
        file_put_contents($this->logFile, $log, FILE_APPEND);

        if ($this->printLog) {
            echo $log;
        }
    }
    
    
    /**
     * error: log error
     *
     * @param  mixed $message
     * @return void
     */
    public function error(string $message): void
    {
        $this->log($message, self::ERROR);
    }
    
    
    /**
     * warning: log warning
     *
     * @param  mixed $message
     * @return void
     */
    public function warning(string $message): void
    {
        $this->log($message, self::WARNING);
    }
    
    
    /**
     * info: log info
     *
     * @param  mixed $message
     * @return void
     */
    public function info(string $message): void
    {
        $this->log($message, self::INFO);
    }
    
}
