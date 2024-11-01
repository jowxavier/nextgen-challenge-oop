<?php

declare(strict_types=1);

namespace App\NextGen\Challenge\Opp;

class Logger extends FileLogger
{
    public function __construct(
        protected FileLogger $fileLogger
    ) {
    }

    protected function write(string $message): void
    {
        file_put_contents($this->fileLogger->file, $message . PHP_EOL, FILE_APPEND);
    }

    public function read(): string
    {
        return file_get_contents($this->fileLogger->file);
    }

    public function log(LogLevel $level, string $message, array $data): void 
    {
        $json = json_encode($data);
        $timestamp = date("Y-m-d H:i:s");
        $logMessage = "{$timestamp} | $level->value: [{$message}] [$json]";
        $this->write($logMessage);
    }
}