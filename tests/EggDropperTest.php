<?php

namespace Tests;

use Kata\EggDropper;
use PHPUnit_Framework_TestCase;

class EggDropperTest extends PHPUnit_Framework_TestCase {
    /** @var  EggDropper */
    private $eggDropper;

    public function setUp(){
        $this->eggDropper = new EggDropper();
    }
    public function test_EggDropper_exists(){
        $eggDropper = $this->eggDropper;
        $this->assertInstanceOf('Kata\EggDropper', $eggDropper);
    }

    public function test_minEggDropper100_returns_integer(){
        $eggDropper = $this->eggDropper;
        $minDrops100 = $eggDropper->minEggDropper100();
        $this->assertTrue(gettype($minDrops100) == 'integer');
    }

    public function test_drop_one_egg(){
        $eggDropper = $this->eggDropper;
        $minDrops100 = $eggDropper->minEggDropper100();
        $this->assertTrue(gettype($minDrops100) == 'integer');
    }

    public function test_drop_100_eggs(){
        $eggDropper = $this->eggDropper;
        $minDrops100 = $eggDropper->minEggDropper100(100);
        $this->assertTrue(gettype($minDrops100) == 'integer');
    }
    
}
 