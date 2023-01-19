<?php

namespace App\Strategy;

use App\Interfaces\DayInterface;

class Sunday implements DayInterface
{
    public function displayMessage(): String
    {
        return 'Hoje é Domingo';
    }

    public function displayMessageSpecialDay(): String
    {
        return 'DIA ESPECIAL - Hoje é Domingo';
    }
}