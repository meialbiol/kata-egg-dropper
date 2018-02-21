<?php
namespace Kata;

class EggDropper{

    protected $minDrops = 0;

    public function minEggDropper100(){
        $this->throwAnEgg();
        return $this->minDrops;
    }

    public function throwAnEgg(){
        $this->minDrops = $this->minDrops+1;
    }
}