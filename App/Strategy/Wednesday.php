<?php

namespace App\Strategy;

use App\Interfaces\DayInterface;

class Wednesday implements DayInterface
{
    public function displayMessage()
    {
        echo 'Hoje é quarta-feira';
    }

    public function displayMessageSpecialDay()
    {
        echo 'DIA ESPECIAL - Hoje é quarta-feira';
    }
}