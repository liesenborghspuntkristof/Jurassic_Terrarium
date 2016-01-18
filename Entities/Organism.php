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
    
    private $positionX; 
    private $positionY;
    private $lifeForce; 
    
    public function __construct($positionX, $positionY) {
        $this->positionX = $positionX;
        $this->positionY = $positionY;
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

    abstract public function spawn(); 
    
    public function expire() {

 
    }
}
