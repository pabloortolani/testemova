<?php

namespace App\Strategy;

use App\Interfaces\DayInterface;

class Sunday implements DayInterface
{
    public function displayMessage()
    {
        echo 'Hoje é Domingo';
    }

    public function displayMessageSpecialDay()
    {
        echo 'DIA ESPECIAL - Hoje é Domingo';
    }
}