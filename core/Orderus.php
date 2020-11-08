<?php

namespace Core;

use Core\Traits\DefenceSkills;
use Core\Traits\AtackSkills;

final class Orderus extends Character{

    use DefenceSkills,AtackSkills;

    public function __construct()
    {
        $this->health=random_int(70,100);
        $this->strenght=random_int(70,80);
        $this->defence=random_int(45,55);
        $this->speed=random_int(40,50);
        $this->luck=random_int(10,30);
        $this->name="Orderus";
    }

}