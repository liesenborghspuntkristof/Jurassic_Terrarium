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
    public function expire() {
    // expire method is called when an organism dies
    // object is not killed (unset), but lifeForce attribute is set to zero.
    // allows possible future requirements (e.g. tracking of dead organisms)
        $this->lifeForce = 0;
    }
}
