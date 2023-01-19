<?php

namespace App\Strategy;

use App\Interfaces\DayInterface;

class Thursday implements DayInterface
{
    public function displayMessage()
    {
        echo 'Hoje é quinta-feira';
    }

    public function displayMessageSpecialDay()
    {
        echo 'DIA ESPECIAL - Hoje é quinta-feira';
    }
}