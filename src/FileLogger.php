<?php

declare(strict_types=1);

namespace App\NextGen\Challenge\Opp;

class FileLogger 
{
    public function __construct(protected string $file) 
    {
    }
}