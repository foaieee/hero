<?php

namespace Core\Traits;

use Core\Character;

trait AtackSkills
{
    function atack($character)
    {
        if (!($character instanceof Character))
            throw new \Exception("The defender must be an subclass of Character");
        if ($this->RapidStrike())
            parent::atack($character);
        if($character->getHealth()<=0)
            return 0;
        echo "{$this->name} atacks <br>".PHP_EOL;
        $characterAtack=$this->getStrenght();
        echo "Atack strenght: $characterAtack <br>".PHP_EOL;
        return $character->defend($characterAtack);
    }

    private function RapidStrike():int
    {
        $chance=rand(1,100);
        if ($chance<=10):
            echo $this->name." used Rapid strike attacking twice <br>".PHP_EOL;
            return true;
        else:
            return false;
        endif;
    }
}