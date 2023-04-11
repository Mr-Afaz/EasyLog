# php lightweight logger
### This is a lightweight logger library for PHP, which allows developers to easily log messages at different levels such as error, warning, and info.

## Installation
- You can install the library using composer or by cloning this repository:
- Using Composer: `composer require imafaz/EasyLog`
- Using git: `git clone https://github.com/imafaz/EasyLog.git`

## Usage
- Using Composer
- If you're using composer autoload, you first need to include it in your PHP script. For example, if your vendor directory is in the root of your project, you would use: <br>
`require_once __DIR__ . '/vendor/autoload.php';`
- Using Git
- If you have cloned this repository from git, you can include the Logger class like this: <br>
`require_once '/path/to/EasyLog/Logger.php';`<br>

- Then import the Logger class into your PHP script: <br>
`use EasyLog\Logger;`<br>
- Create an instance of Logger: <br>
`$logger = new Logger('/path/to/log/file.log');`<br
- You can log messages at different levels using the following methods:<br>

- log an error message: 
`$logger->error('An error has occurred.');`

- log a warning message: 
`$logger->warning('A warning message.');`

- log an info message: 
`$logger->info('An info message.');`

- By default, the log messages will be written to the specified file. If you want to print the messages on the screen as well, you can pass the second parameter as true when creating the logger instance:
`$logger = new Logger('/path/to/log/file.log', true);`

# License
- This script is licensed under the [MIT License](https://opensource.org/licenses/MIT).