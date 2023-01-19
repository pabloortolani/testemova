<?php

namespace App\Interfaces;

interface DayInterface
{
    public function displayMessage(): String;
    public function displayMessageSpecialDay(): String;
}