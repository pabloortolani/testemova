<?php

namespace App\Strategy;

use App\Interfaces\DayInterface;

class Wednesday implements DayInterface
{
    public function displayMessage(): String
    {
        return 'Hoje é quarta-feira';
    }

    public function displayMessageSpecialDay(): String
    {
        return 'DIA ESPECIAL - Hoje é quarta-feira';
    }
}