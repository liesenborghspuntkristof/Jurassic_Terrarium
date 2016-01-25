<?php
//Plant.php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Plant
 *
 * @author kristof.liesenborghs
 */
class Plant extends Organism {
    public function __construct($positionX, $positionY) {
        Parent::__construct($positionX, $positionY);
        $this->setLifeforce(1);
    }
}
