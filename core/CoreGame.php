<?php

namespace Core;

class CoreGame{

    private $first_character;
    private $second_character;
    private $started;

    public function __construct($first_character,$second_character)
    {
        if (!($first_character instanceof Character))
            throw new \Exception("The first character must be an subclass of Character");
        if (!($second_character instanceof Character))
            throw new \Exception("The second character must be an subclass of Character");
        $this->first_character=$first_character;
        $this->second_character=$second_character;
        $this->started=0;
        $this->winner="";

    }

    public function presentCharacters()
    {
        $this->first_character->presentCharacter();
        $this->second_character->presentCharacter();
    }

    public function startGame()
    {
        if($this->started===0):
            $this->started=1;
            if ($this->first_character->getSpeed()>$this->second_character->getSpeed()):
                $this->fight($this->first_character,$this->second_character);
            elseif ($this->first_character->getSpeed()<$this->second_character->getSpeed()):
                $this->fight($this->second_character,$this->first_character);
            elseif ($this->first_character->getLuck()>$this->second_character->getLuck()):
                $this->fight($this->first_character,$this->second_character);
            elseif ($this->first_character->getLuck()<$this->second_character->getLuck()):
                $this->fight($this->second_character,$this->first_character);
            else:
                $this->fight($this->first_character,$this->second_character);
            endif;
        else:
            if($this->winner==""):
                $winner="no one won tha battle";
            else:
                $winner="{$this->winner} won the battle";
            endif;
            echo PHP_EOL."<hr>The story was already told and {$winner}";
        endif;
    }

    private function fight($oddAtacker,$evenAtacker):void {
        for ($i=1;$i<=20;$i++):
            echo PHP_EOL."<hr>Turn $i <br>".PHP_EOL;
            if($i%2):
                $oddAtacker->atack($evenAtacker);
                $defenderHealt=$evenAtacker->getHealth();
                if($defenderHealt<=0):
                    echo $evenAtacker->getName()." lost the fight and {$oddAtacker->getName()} wins";
                    $this->setWinner($oddAtacker->getName());
                    break;
                endif;
            else:
                $evenAtacker->atack($oddAtacker);
                $defenderHealt=$oddAtacker->getHealth();
                if($defenderHealt<=0):
                    echo $oddAtacker->getName()." lost the fight and {$evenAtacker->getName()} wins";
                    $this->setWinner($evenAtacker->getName());
                    break;
                endif;
            endif;
        endfor;
        if ($i===20 && $this->winner=="")
            echo "The fight ended and no one won";
    }

    private function setWinner($name):void{
        $this->winner=$name;
    }

}