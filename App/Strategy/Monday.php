<?php

namespace App\Strategy;

use App\Interfaces\DayInterface;

class Monday implements DayInterface
{

    public function displayMessage(): String
    {
        return 'Hoje é segunda-feira';
    }

    public function displayMessageSpecialDay(): String
    {
        return 'DIA ESPECIAL - Hoje é segunda-feira';
    }
}