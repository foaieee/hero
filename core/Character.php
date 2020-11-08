<?php

namespace Core;

abstract class Character
{
    protected $health;
    protected $strenght;
    protected $defence;
    protected $speed;
    protected $luck;
    protected $name;

    public function presentCharacter(){
        echo "$this->name stats: Health: $this->health , Strenght: $this->strenght , Defence: $this->defence , Speed: $this->speed , Luck: $this->luck <br>".PHP_EOL;
    }

    public function atack($character)
    {
        if (!($character instanceof Character))
            throw new \Exception("The defender must be an subclass of Character");
        echo "{$this->name} atacks <br>".PHP_EOL;
        $characterAtack=$this->getStrenght();
        echo "Atack strenght: $characterAtack <br>".PHP_EOL;
        return $character->defend($characterAtack);
    }

    public function defend($damage)
    {
        $miss=rand(0,100);
        if ($miss<=$this->luck):
            echo "{$this->name} got lucky and the atacker missed <br>".PHP_EOL;
            return $this->health;
        endif;
        echo "{$this->name} defends <br>".PHP_EOL;

        $damageTaken=$this->getDamageTaken($damage);

        echo "$damageTaken damage taken <br>".PHP_EOL;
        $this->health-=($damageTaken);
        if($this->health<=0):
            $this->health=0;
        endif;
        if($this->health>0):
            echo $this->name ." remains with {$this->health} health <br>".PHP_EOL;
        endif;
        return $this->health;
    }

    protected function getDamageTaken($damage):int
    {
        $defece=$this->defence;
        $damageTaken=$damage-$defece;
        if ($damageTaken<0)
            $damageTaken=0;
        return $damageTaken;
    }

    public function getHealth():int
    {
        return $this->health;
    }

    public function getStrenght():int
    {
        return $this->strenght;
    }

    public function getDefence():int
    {
        return $this->defence;
    }

    public function getSpeed():int
    {
        return $this->speed;
    }

    public function getLuck():int
    {
        return $this->luck;
    }

    public function getName():string
    {
        return $this->name;
    }
}