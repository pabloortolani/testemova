<?php

namespace App\Services;

use App\Interfaces\DayInterface;

class DayOfWeekStrategy
{
    private DayInterface $dia;

    public function __construct(DayInterface $dia)
    {
        $this->dia = $dia;
    }

    public function displayMessageDay()
    {
        echo $this->dia->displayMessage();
    }

    public function displayMessageSpecialDay()
    {
        echo $this->dia->displayMessageSpecialDay();
    }
}