<?php
namespace Kata;

class EggDropper{

    protected $minDrops = 0;
    protected $floor = 0;
    protected $broken = false;
    protected $eggNumber;
    protected $result;

    public function minEggDropper100($eggNumber = 1){
        $this->eggNumber = $eggNumber;
        while($this->floor < 100 && ($this->eggNumber > 0)){
            $this->drop();
            $this->result[$this->eggNumber] = $this->minDrops;
            $this->checkIsBroken();
        }

        return min($this->result);
    }

    protected function drop()
    {
        $this->minDrops++;
    }

    protected function upFloor(){
        $this->floor++;
    }

    protected function checkIsBroken(){
        $this->broken = (bool) rand(0,1);
        if($this->broken && $this->eggNumber != 0){
            $this->changeEgg();
        }else{
            $this->upFloor();
        }

    }

    protected function changeEgg()
    {
        $this->eggNumber--;
        $this->floor = 0;
        $this->minDrops = 0;
    }
}