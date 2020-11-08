<?php

namespace Core;

require_once "Character.php";

final class WildBeast extends Character{

    public function __construct()
    {
        $this->health=random_int(60,90);
        $this->strenght=random_int(60,90);
        $this->defence=random_int(40,60);
        $this->speed=random_int(40,60);
        $this->luck=random_int(25,40);
        $this->name="Wild beast";
    }

}