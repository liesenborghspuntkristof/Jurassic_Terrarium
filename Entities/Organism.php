<?php
//Organism.php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Organism
 *
 * @author kristof.liesenborghs
 */
abstract class Organism implements Life {
    
    protected $positionX;
    protected $positionY;
    protected $lifeForce;
    
    public function __construct($positionX, $positionY) {
        $this->setPositionX($positionX);
        $this->setPositionY($positionY);
    }

    function getPositionX() {
        return $this->positionX;
    }

    function getLifeForce() {
        return $this->lifeForce;
    }

    function getPositionY() {
        return $this->positionY;
    }

    function setPositionX($positionX) {
        $this->positionX = $positionX;
    }

    function setPositionY($positionY) {
        $this->positionY = $positionY;
    }

    function setLifeForce($lifeForce) {
        $this->lifeForce = $lifeForce;
    }
   
    public function expire()
    // object's lifeForce is set to zero
    // this allows external lifeForce check to unset the object
    // @author Sven.Croon
    {
        $this->setLifeForce(0);
    }
    
    public function hasRightNeighbour() {
        $loc = ($this->positionX + 1) % $_SESSION["dimension"];
        return ($loc == 0)? false:true;
}
}