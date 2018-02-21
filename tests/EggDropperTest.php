<?php

namespace Tests;

use Kata\EggDropper;
use PHPUnit_Framework_TestCase;

class EggDropperTest extends PHPUnit_Framework_TestCase {

    public function test_EggDropper_exists(){
        $eggDropper = new EggDropper();
        $this->assertInstanceOf('Kata\EggDropper', $eggDropper);
    }
    
}
 