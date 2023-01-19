<?php

namespace App\Strategy;

use App\Interfaces\DayInterface;

class Friday implements DayInterface
{
    public function displayMessage()
    {
        echo 'Hoje é sexta-feira';
    }

    public function displayMessageSpecialDay()
    {
        echo 'DIA ESPECIAL - Hoje é sexta-feira';
    }
}