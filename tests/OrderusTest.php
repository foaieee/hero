<?php

use Core\Orderus;
use PHPUnit\Framework\TestCase;

final class OrderusTest extends TestCase{

    public function testGetName()
    {
        $ordeus=new Orderus();
        $this->assertEquals("Orderus",$ordeus->getName());
    }

    public function testHealth()
    {
        $ordeus=new Orderus();
        $this->assertGreaterThanOrEqual(70,$ordeus->getHealth());
        $this->assertLessThanOrEqual(100,$ordeus->getHealth());
    }

    public function testStrenght()
    {
        $ordeus=new Orderus();
        $this->assertGreaterThanOrEqual(70,$ordeus->getStrenght());
        $this->assertLessThanOrEqual(80,$ordeus->getStrenght());
    }

    public function testDefence()
    {
        $ordeus=new Orderus();
        $this->assertGreaterThanOrEqual(45,$ordeus->getDefence());
        $this->assertLessThanOrEqual(55,$ordeus->getDefence());
    }

    public function testSpeed()
    {
        $ordeus=new Orderus();
        $this->assertGreaterThanOrEqual(40,$ordeus->getSpeed());
        $this->assertLessThanOrEqual(50,$ordeus->getSpeed());
    }

    public function testLuck()
    {
        $ordeus=new Orderus();
        $this->assertGreaterThanOrEqual(10,$ordeus->getLuck());
        $this->assertLessThanOrEqual(30,$ordeus->getLuck());
    }

    public function testDefend()
    {
        $ordeus=new Orderus();
        $this->assertGreaterThanOrEqual(0,$ordeus->defend(10));
        $this->assertGreaterThanOrEqual(0,$ordeus->defend(100));
        $this->assertGreaterThanOrEqual(0,$ordeus->defend(1000));
    }

    public function testExceptionAtack()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('The defender must be an subclass of Character');
        $ordeus=new Orderus();
        $ordeus->atack(10);
    }
}