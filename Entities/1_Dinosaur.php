<?php

abstract class Dinosaur extends organism implements Animal {

    public function __construct($positionX, $positionY) {
        Parent::__construct($positionX, $positionY);
        $this->setLifeForce(10);
    }

    public function eat($food) {
    // @author Sven.Croon
    // $diner is the object that eats
    // $food is the object that gets eaten
    //@refactor by Gilles
    // Used Setter to add to this Dinosaurs lifeforce
        $this->setLifeForce($this->lifeForce += $food->lifeForce);
        $food->expire();
    }

    public function move($newPosX, $newPosY) {
    // object moves to new position
        $this->positionX = $newPosX;
        $this->positionY = $newPosY;
    }

    public function hasRightNeighbour() {
    // @author Sven.Croon
    // $loc is 0 when object is in rightmost column (X mod dim == 0)
        $loc = ($this->positionX + 1) % $terrariumSim->dimension;
        return boolval($loc);
    }

    public function getRightNeighbour($organisms) {
        $selfPosX = $this->positionX;
        $selfPosY = $this->positionY;
        if ($this instanceof Herbivore) {
            $selfType = 'herbivore';
        } elseif ($this instanceof Carnivore) {
            $selfType = 'carnivore';
        }
        foreach ($organisms as $objectType => $objects) {
            foreach ($objects as $entity) {
                $entityPosX = $entity->positionX;
                $entityPosY = $entity->positionY;
                if (($selfPosY == $entityPosY) AND ( $selfPosX == $entityPosX - 1)) {
                    return $entity;
                }
            }
        }
    }

    public function looseLife($var) {
        $newLifeForce = $this->getLifeForce() - $var;
        $this->setLifeForce($newLifeForce);
    }

}
