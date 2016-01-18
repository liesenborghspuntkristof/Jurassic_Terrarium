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
    
    private $position; 
    private $lifeForce; 
    
    public function __construct($position, $lifeForce) {
        $this->position = $position;
        $this->lifeForce = $lifeForce; 
    }
            
    function getPosition() {
        return $this->position;
    }

    function getLifeForce() {
        return $this->lifeForce;
    }

    function setPosition($position) {
        $this->position = $position;
    }

    function setLifeForce($lifeForce) {
        $this->lifeForce = $lifeForce;
    }

    abstract public function spawn(); 
    
    public function expire($position) {
        $position = null;
        return $position; 
    }
}
