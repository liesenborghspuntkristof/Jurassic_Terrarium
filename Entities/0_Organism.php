<?php
//Organism.php

/**
 * Description of Organism
 *
 * @author kristof.liesenborghs
 * non-set/get methods @author Sven.Croon
 */

abstract class Organism implements Life
{  
    protected $positionX;
    protected $positionY;
    protected $lifeForce;
    
    public function __construct($positionX, $positionY)
    {
        $this->setPositionX($positionX);
        $this->setPositionY($positionY);
    }

    function getPositionX()
    {
        return $this->positionX;
    }

    function getPositionY()
    {
        return $this->positionY;
    }

    function getLifeForce()
    {
        return $this->lifeForce;
    }

    function setPositionX($positionX)
    {
        $this->positionX = $positionX;
    }

    function setPositionY($positionY)
    {
        $this->positionY = $positionY;
    }

    function setLifeForce($lifeForce)
    {
        $this->lifeForce = $lifeForce;
    }
   
    public function expire()
    // @author Sven.Croon
    // object's lifeForce is set to zero
    // this allows external lifeForce check to unset the object
    {
        $this->setLifeForce(0);
    }
}