<?php

namespace App\Strategy;

use App\Interfaces\DayInterface;

class Thursday implements DayInterface
{
    public function displayMessage(): String
    {
        return 'Hoje é quinta-feira';
    }

    public function displayMessageSpecialDay(): String
    {
        return 'DIA ESPECIAL - Hoje é quinta-feira';
    }
}