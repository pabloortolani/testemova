<?php

namespace App\Strategy;

use App\Interfaces\DayInterface;

class Satruday implements DayInterface
{
    public function displayMessage(): String
    {
        return 'Hoje é sábado';
    }

    public function displayMessageSpecialDay(): String
    {
        return 'DIA ESPECIAL - Hoje é sábado';
    }
}