<?php

namespace App\Strategy;

use App\Interfaces\DayInterface;

class Friday implements DayInterface
{
    public function displayMessage(): String
    {
        return 'Hoje é sexta-feira';
    }

    public function displayMessageSpecialDay(): String
    {
        return 'DIA ESPECIAL - Hoje é sexta-feira';
    }
}