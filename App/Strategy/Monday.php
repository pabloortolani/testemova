<?php

namespace App\Strategy;

use App\Interfaces\DayInterface;

class Monday implements DayInterface
{

    public function displayMessage()
    {
        echo 'Hoje é segunda-feira';
    }

    public function displayMessageSpecialDay()
    {
        echo 'DIA ESPECIAL - Hoje é segunda-feira';
    }
}