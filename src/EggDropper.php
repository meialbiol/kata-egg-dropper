<?php
namespace Kata;

class EggDropper{

    protected $minDrops = 0;
    protected $floor = 0;
    protected $broken = false;
    protected $eggNumber;
    protected $result;
    protected $maxFloor;

    public function minEggDropper100($eggNumber = 1){
        $this->eggNumber = $eggNumber;
        while($this->floor < 100 && ($this->eggNumber > 0)){
            $this->drop();
            $this->result[$this->eggNumber] = $this->minDrops;
            $this->checkIsBroken();
        }

        return min($this->result);
    }

    public function minEggDropper2($eggNumber = 2){
        $this->eggNumber = $eggNumber;
        while($this->floor < 100 && ($this->eggNumber > 0)){
            $this->drop();
            $this->result[$this->eggNumber] = [
                'floor' => $this->floor,
                'drops' => $this->minDrops
            ];
            $this->checkIsBroken();
        }
        return $this->minDropsFromHighestFloor();
    }

    public function minEggDropperX($eggNumber, $floorNumber){
        $this->eggNumber = $eggNumber;
        $this->maxFloor = $floorNumber;
        while($this->eggNumber > 0){
            $this->drop();
            $this->result[$this->eggNumber] = [
                'floor' => $this->floor,
                'drops' => $this->minDrops
            ];
            $this->checkIsBroken();
        }

        return $this->minDropsFromHighestFloor();

    }

    protected function drop()
    {
        $this->minDrops++;
    }

    protected function upFloor(){
        $this->floor = $this->floor < $this->maxFloor ? $this->floor+1 : $this->floor;
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

    protected function minDropsFromHighestFloor()
    {
        $highestFloor = 0;
        $minDrops = 1;

        foreach ($this->result as $eggCount => $value){
            if($value['floor'] >= $highestFloor && $value['drops'] >= $minDrops){
                $highestFloor = $value['floor'];
                $minDrops = $value['drops'];
            }
        }
        return $minDrops;
    }
}