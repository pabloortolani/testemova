<?php

namespace App\Strategy;

use App\Interfaces\DayInterface;

class Tuesday implements DayInterface
{
    public function displayMessage(): String
    {
        return 'Hoje é terça-feira';
    }

    public function displayMessageSpecialDay(): String
    {
        return 'DIA ESPECIAL - Hoje é terça-feira';
    }
}