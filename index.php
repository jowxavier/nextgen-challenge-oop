<?php 

use App\NextGen\Challenge\Opp\Logger;
use App\NextGen\Challenge\Opp\LogLevel;
use App\NextGen\Challenge\Opp\FileLogger;

require __DIR__.'/vendor/autoload.php';

$logger = new Logger(new FileLogger('./logs.txt'));
$logger->log(level: LogLevel::alert, message: 'Message 1', data: ['data1' => 1, 'data2' => 2]);
$logger->log(level: LogLevel::danger, message: 'Message 3', data: ['data3' => 1, 'data4' => 2]);
$logger->log(level: LogLevel::log, message: 'Message 2', data: ['data5' => 1, 'data6' => 2]);

echo "Listando conteúdo do aquivo logs.text.\n\n{$logger->read()}";