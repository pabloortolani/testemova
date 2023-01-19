<?php

require __DIR__.'/../vendor/autoload.php';

use App\Services\DayOfWeekStrategy;
use App\Strategy\Monday;

$friday = new Monday();

$dayofWeekStrategy = new DayOfWeekStrategy($friday);
echo $dayofWeekStrategy->displayMessageDay().PHP_EOL;
echo $dayofWeekStrategy->displayMessageSpecialDay();
