<?php

namespace Tests;

use Kata\EggDropper;
use PHPUnit_Framework_TestCase;

class EggDropperTest extends PHPUnit_Framework_TestCase {
    /** @var  EggDropperWrapper */
    private $eggDropper;

    /**
     *
     */
    public function setUp(){
        $this->eggDropper = new EggDropperWrapper();
    }
    public function test_EggDropper_exists(){
        $eggDropper = $this->eggDropper;
        $this->assertInstanceOf('Kata\EggDropper', $eggDropper);
    }

    public function test_drop_one_egg(){
        $eggDropper = $this->eggDropper;
        $minDrops100 = $eggDropper->minEggDropper100();
        $this->assertEquals(1, count($eggDropper->obtainResult()));
        $this->assertTrue(gettype($minDrops100) == 'integer');
    }

    public function test_drop_100_eggs(){
        $eggDropper = $this->eggDropper;
        $minDrops100 = $eggDropper->minEggDropper100(100);
        $this->assertEquals(100, count($eggDropper->obtainResult()));
        $this->assertTrue(gettype($minDrops100) == 'integer');
    }

    public function test_minEggDropper2_returns_integer(){
        $eggDropper = $this->eggDropper;
        $minDrops100 = $eggDropper->minEggDropper2();
        $this->assertEquals(2, count($eggDropper->obtainResult()));
        $this->assertEquals(2, $eggDropper->obtainMaxFloor());

        $this->assertTrue(gettype($minDrops100) == 'integer');
    }

    public function test_minEggDropperX_returns_integer(){
        $eggDropper = $this->eggDropper;
        $minDrops100 = $eggDropper->minEggDropperX(3, 0);
        $this->assertEquals(3, count($eggDropper->obtainResult()));
        $this->assertEquals(0, $eggDropper->obtainMaxFloor());
        $this->assertTrue(gettype($minDrops100) == 'integer');
    }
}

class EggDropperWrapper extends EggDropper{
    public function obtainResult(){
        return $this->result;
    }

    public function obtainMaxFloor(){
        return $this->maxFloor;
    }
}
 