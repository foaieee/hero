<?php

use Core\Orderus;
use Core\CoreGame;
use PHPUnit\Framework\TestCase;

final class CoreGameTest extends TestCase{

    public function testFirstCharacter()
    {
        $ordeus=new Orderus();
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('The first character must be an subclass of Character');
        $game=new CoreGame("",$ordeus);

    }

    public function testSecondCharacter()
    {
        $ordeus=new Orderus();
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('The second character must be an subclass of Character');
        $game=new CoreGame($ordeus,"");

    }

}