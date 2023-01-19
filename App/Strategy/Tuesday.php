<?php

namespace App\Strategy;

use App\Interfaces\DayInterface;

class Tuesday implements DayInterface
{
    public function displayMessage()
    {
        echo 'Hoje é terça-feira';
    }

    public function displayMessageSpecialDay()
    {
        echo 'DIA ESPECIAL - Hoje é terça-feira';
    }
}