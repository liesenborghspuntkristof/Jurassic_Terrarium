
<?php
//Dinosaur.php

abstract class Dinosaur extends organism implements Animal
{
    public function __construct($positionX, $positionY) {
        Parent::__construct($positionX, $positionY);
        $this->setLifeForce(10);
    }
    public function eat($food)
    // @author Sven.Croon
    // $diner is the object that eats
    // $food is the object that gets eaten
        //@refactor by Gilles
        // Used Setter to add to this Dinosaurs lifeforce
    {  
        $this->setLifeForce($this->lifeForce += $food->lifeForce);
        $food->expire();
    }

    public function move($newPosX, $newPosY)
    // object moves to new position
    {
        $this->positionX = $newPosX;
        $this->positionY = $newPosY;
    }
}

