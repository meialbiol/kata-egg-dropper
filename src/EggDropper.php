<?php
namespace Kata;

class EggDropper{

    protected $minDrops = 0;
    protected $floor = 0;
    protected $broken = false;

    public function minEggDropper100(){
        $this->drop();
        while(!$this->isBroken() && $this->floor < 100){
            $this->upFloor();
        }
        return $this->minDrops;
    }

    protected function drop()
    {
        $this->minDrops++;
    }

    protected function upFloor(){
        $this->floor++;
    }

    protected function isBroken(){
        $this->broken = (bool) rand(0,1);
        return $this->broken;
    }
}