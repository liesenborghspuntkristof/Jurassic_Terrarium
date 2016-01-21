<?php

require_once 'store_DAO.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StoreService
 *
 * @author kristof.liesenborghs
 */
function simDataToDb($sessionId, $simData) {
    for ($t = 0; $t < count($simData); $t++) {
        $dayData = $simData[$t];
        $sd = new Store_DAO();
        $store = $sd->storeData($sessionId, $dayData);
    }
}

function matrixToDb($sessionId, $matrix, $dimension) {
    $startPlants = 0;
    $startCarni = 0;
    $startHerbi = 0;
    $endPlants = "";
    $endCarni = "";
    $endHerbi = "";
    for ($x = 0; $x < count($matrix[0]); $x++) {
        for ($y = 0; $y < count($matrix[0]); $y++) {
            if ($matrix[0][$x][$y]['type'] == "P") {
                $startPlants++;
            } elseif ($matrix[0][$x][$y]['type'] == "C") {
                $startCarni++;
            } elseif ($matrix[0][$x][$y]['type'] == "H") {
                $startHerbi++;
            }
        }
    }
    $finalDay = count($matrix) - 1;
    for ($x = 0; $x < count($matrix[0]); $x++) {
        for ($y = 0; $y < count($matrix[0]); $y++) {
            if ($matrix[$finalDay][$x][$y]['type'] == "P") {
                $endPlants = "P";
            } elseif ($matrix[$finalDay][$x][$y]['type'] == "C") {
                $endCarni = "C";
            } elseif ($matrix[$finalDay][$x][$y]['type'] == "H") {
                $endHerbi = "H";
            }
        }
    }
    $surviverCode = $endPlants . $endCarni . $endHerbi;
    $daysTillEnd = count($matrix);
    $sd = new Store_DAO();
    $store = $sd->storeMatrix($sessionId, $startPlants, $startCarni, $startHerbi, $surviverCode, $daysTillEnd, $dimension);
}
