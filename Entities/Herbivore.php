<?php
//Herbivore.php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Herbivore
 *
 * @author kristof.liesenborghs
 */
class Herbivore extends Dinosaur{
    public function mate() {
        Organism::spawn("herbivore");
    }
}
