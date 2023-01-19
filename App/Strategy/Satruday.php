<?php

namespace App\Strategy;

use App\Interfaces\DayInterface;

class Satruday implements DayInterface
{
    public function displayMessage()
    {
        echo 'Hoje é sábado';
    }

    public function displayMessageSpecialDay()
    {
        echo 'DIA ESPECIAL - Hoje é sábado';
    }
}