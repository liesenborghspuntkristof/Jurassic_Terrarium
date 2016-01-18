<?php
//Dinosaur.php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dinosaur
 *
 * @author kristof.liesenborghs
 */
abstract class Dinosaur implements Animal{
    public function eat($diner, $food) {
    // @author Sven.Croon
    // $diner is the object that eats
    // $food is the object that gets eaten        
        $diner->lifeForce += $food->lifeForce;
        $food->expire();
    }
}
