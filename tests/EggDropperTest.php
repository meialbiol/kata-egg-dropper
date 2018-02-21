<?php

namespace Tests;

use Kata\EggDropper;
use PHPUnit_Framework_TestCase;

class EggDropperTest extends PHPUnit_Framework_TestCase {

    public function test_EggDropper_exists(){
        $eggDropper = new EggDropper();
        $this->assertInstanceOf('Kata\EggDropper', $eggDropper);
    }

    public function test_minEggDropper100_returns_integer(){
        $eggDropper = new EggDropper();
        $minDrops100 = $eggDropper->minEggDropper100();
        $this->assertTrue(gettype($minDrops100) == 'integer');
    }
    
}
 