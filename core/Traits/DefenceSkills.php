<?php

namespace Core\Traits;

trait DefenceSkills
{
    protected function getDamageTaken($damage):int
    {
        $defece=$this->defence;
        $damageTaken=$damage-$defece;
        if ($damageTaken<0):
            $damageTaken=0;
            return $damageTaken;
        endif;
        $damageTaken=$this->MagicShiled($damageTaken);
        return $damageTaken;
    }

    private function MagicShiled($damageTaken):int
    {
        $chance=rand(1,100);
        if ($chance<=20):
            echo "$this->name used magic shield <br>".PHP_EOL;
            return $damageTaken/2;
        else:
            return $damageTaken;
        endif;
    }
}