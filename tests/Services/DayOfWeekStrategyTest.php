<?php

namespace Tests\Services;

use App\Services\DayOfWeekStrategy;
use App\Strategy\Friday;
use App\Strategy\Monday;
use App\Strategy\Satruday;
use App\Strategy\Sunday;
use App\Strategy\Thursday;
use App\Strategy\Tuesday;
use App\Strategy\Wednesday;
use PHPUnit\Framework\TestCase;

class DayOfWeekStrategyTest extends TestCase
{
    public function testMessageMonday()
    {
        $friday = new Monday();
        $dayofWeekStrategy = new DayOfWeekStrategy($friday);

        $this->assertEquals("Hoje é segunda-feira", $dayofWeekStrategy->displayMessageDay());
    }

    public function testMessageSpecialMonday()
    {
        $friday = new Monday();
        $dayofWeekStrategy = new DayOfWeekStrategy($friday);

        $this->assertEquals("DIA ESPECIAL - Hoje é segunda-feira", $dayofWeekStrategy->displayMessageSpecialDay());
    }

    public function testMessageTuesday()
    {
        $friday = new Tuesday();
        $dayofWeekStrategy = new DayOfWeekStrategy($friday);

        $this->assertEquals("Hoje é terça-feira", $dayofWeekStrategy->displayMessageDay());
    }

    public function testMessageSpecialTuesday()
    {
        $friday = new Tuesday();
        $dayofWeekStrategy = new DayOfWeekStrategy($friday);

        $this->assertEquals("DIA ESPECIAL - Hoje é terça-feira", $dayofWeekStrategy->displayMessageSpecialDay());
    }

    public function testMessageWednesday()
    {
        $friday = new Wednesday();
        $dayofWeekStrategy = new DayOfWeekStrategy($friday);

        $this->assertEquals("Hoje é quarta-feira", $dayofWeekStrategy->displayMessageDay());
    }

    public function testMessageSpecialWednesday()
    {
        $friday = new Wednesday();
        $dayofWeekStrategy = new DayOfWeekStrategy($friday);

        $this->assertEquals("DIA ESPECIAL - Hoje é quarta-feira", $dayofWeekStrategy->displayMessageSpecialDay());
    }

    public function testMessageThursday()
    {
        $friday = new Thursday();
        $dayofWeekStrategy = new DayOfWeekStrategy($friday);

        $this->assertEquals("Hoje é quinta-feira", $dayofWeekStrategy->displayMessageDay());
    }

    public function testMessageSpecialThursday()
    {
        $friday = new Thursday();
        $dayofWeekStrategy = new DayOfWeekStrategy($friday);

        $this->assertEquals("DIA ESPECIAL - Hoje é quinta-feira", $dayofWeekStrategy->displayMessageSpecialDay());
    }

    public function testMessageFriday()
    {
        $friday = new Friday();
        $dayofWeekStrategy = new DayOfWeekStrategy($friday);

        $this->assertEquals("Hoje é sexta-feira", $dayofWeekStrategy->displayMessageDay());
    }

    public function testMessageSpecialFriday()
    {
        $friday = new Friday();
        $dayofWeekStrategy = new DayOfWeekStrategy($friday);

        $this->assertEquals("DIA ESPECIAL - Hoje é sexta-feira", $dayofWeekStrategy->displayMessageSpecialDay());
    }

    public function testMessageSatruday()
    {
        $friday = new Satruday();
        $dayofWeekStrategy = new DayOfWeekStrategy($friday);

        $this->assertEquals("Hoje é sábado", $dayofWeekStrategy->displayMessageDay());
    }

    public function testMessageSpecialSatruday()
    {
        $friday = new Satruday();
        $dayofWeekStrategy = new DayOfWeekStrategy($friday);

        $this->assertEquals("DIA ESPECIAL - Hoje é sábado", $dayofWeekStrategy->displayMessageSpecialDay());
    }

    public function testMessageSunday()
    {
        $friday = new Sunday();
        $dayofWeekStrategy = new DayOfWeekStrategy($friday);

        $this->assertEquals("Hoje é Domingo", $dayofWeekStrategy->displayMessageDay());
    }

    public function testMessageSpecialSunday()
    {
        $friday = new Sunday();
        $dayofWeekStrategy = new DayOfWeekStrategy($friday);

        $this->assertEquals("DIA ESPECIAL - Hoje é Domingo", $dayofWeekStrategy->displayMessageSpecialDay());
    }
}