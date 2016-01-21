<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Store_DAO
 *
 * @author kristof.liesenborghs
 */
class Store_DAO {

    private $dbConn;
    private $dbUsername;
    private $dbPassw;

    public function __construct() {
        $this->dbConn = "mysql:host=localhost;dbname=jurassic_terrarium;charset=utf8";
        $this->dbUsername = "scrumgebruiker";
        $this->dbPassw = "scrumpwd";
    }

    public function storeData($sessionId, $dayData) {
        $sql = "insert into organisms (session_id, type, day, life, positionX, positionY) values (:session_id, :type, :day, :life, :positionX, :positionY)";
        $dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassw);
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':session_id' => $sessionId, ':type' => $dayData['type'], ':day' => $dayData['day'], ':life' => $dayData['lifeforce'], ':positionX' => $dayData['posx'],
            ':positionY' => $dayData['posy']));
        $dbh = null;
    }

    public function storeMatrix($sessionId, $startPlants, $startCarni, $startHerbi, $surviverCode, $daysTillEnd, $dimension) {
        $sql = "insert into organisms (session_id, start_plants, start_carnivores, start_herbivores, surviver, count_days, dimensions) values (:session_id, :start_plants, :start_carnivores, :start_herbivores, :surviver, :count_days, :dimensions)";
        $dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassw);
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':session_id' => $sessionId, ':start_plants' => $startPlants, ':start_carnivores' => $startCarni, ':start_herbivores' => $startHerbi, ':surviver' => $surviverCode,
            ':count_days' => $daysTillEnd, ':dimensions' => $dimension));
        $dbh = null;
    }

}
