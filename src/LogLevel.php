<?php

declare(strict_types=1);

namespace App\NextGen\Challenge\Opp;

enum LogLevel: string { 
    case log = 'log'; 
    case alert = 'alert';  
    case danger = 'danger' ;       
  }