# lightweight php Logger

lightweight logger library for PHP, which allows developers to easily log messages at different levels such as debug, info, warning, error, and fatal.
---

- [Requirements](#requirements)
- [Installation](#installation)
- [Quick Start](#quick-start)
- [Usage](#usage)
- [License](#license)

---

## Requirements

This library is supported by **PHP versions 7.0** or higher

## Installation

The preferred way to install this extension is through [Composer](http://getcomposer.org/download/).

To install **Easylog**, simply:

    $ composer require imafaz/EasyLog

The previous command will only install the necessary files, if you prefer to **download the entire source code** you can use:

    $ composer require imafaz/EasyLog --prefer-source

You can also **clone the complete repository** with Git:

    $ git clone https://github.com/imafaz/EasyLog.git

Or **install it manually**:

[Download Logger.php](https://raw.githubusercontent.com/imafaz/EasyLog/main/src/Logger.php):

    $ wget https://raw.githubusercontent.com/imafaz/EasyLog/main/src/Logger.php


## Quick Start

To use this library with **Composer**:

```php
require __DIR__ . '/vendor/autoload.php';

use EasyLog\Logger;
```

Or If you installed it **manually**, use it:

```php
require_once __DIR__ . '/Logger.php';
use EasyLog\Logger;
```


## Usage

Create an instance of Logger
```php
$logger = new Logger('/path/to/file.log');
```

logging messages at different levels using the following methods:
```php
// debug message:
$log->debug('This is a debug message.');

// info message:
$log->info('This is an informational message.');

// warning message:
$log->warning('This is a warning message.');

// error message:
$log->error('This is an error message.');

// fatal exception:
$log->fatal('This is a fatal message.');
```

By default, the log messages will be written to the specified file. If you want to print the messages on the screen as well, you can pass the second parameter as true when creating the logger instance:
```php
$logger = new Logger('/path/to/file.log', true);
```

# License
- This script is licensed under the [MIT License](https://opensource.org/licenses/MIT).