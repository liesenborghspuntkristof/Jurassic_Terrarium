<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmptySpace
 *
 * @author kristof.liesenborghs
 */
class EmptySpace {
    
    public function findEmptySpace($simulation){
        $emptyFields = array_keys($simulation, null);
        $emptyFields = array_fill_keys($emptyFields, null);
        
        return $emptyFields; 
    }
}
