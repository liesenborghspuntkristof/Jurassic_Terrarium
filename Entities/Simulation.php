<?php

class Simulation {

    private $ID;
    private $dimension;
    private $startPlantCount;
    private $startHerbivoreCount;
    private $startCarnivoreCount;
    private $simulation = [];
    private $gridToday = [];

    public function __construct($par_dim, $par_plants, $par_herbies, $par_carnies) {
        $this->setDimension($par_dim);
        $this->setStartPlantCount($par_plants);
        $this->setStartHerbivoreCount($par_herbies);
        $this->setStartCarnivoreCount($par_carnies);
        // create empty ZeroDay Grid
        for ($i = 0; $i < $this->dimension; $i++) {
            for ($j = 0; $j < $this->dimension; $j++) {     
                $this->gridToday[$i][$j] = 'E'; // 'E' = EMPTY
            }
        }
    }

    public function setDimension($par_dim) {
        $this->dimension = $par_dim;
    }
    public function getDimension() {
        return $this->dimension;
    }

    public function setStartPlantCount($par_plants) {
        $this->startPlantCount = $par_plants;
    }

    function getStartPlantCount() {
        return $this->startPlantCount;
    }

    public function setStartHerbivoreCount($par_herbies) {
        $this->startHerbivoreCount = $par_herbies;
    }
    
    function getStartHerbivoreCount() {
        return $this->startHerbivoreCount;
    }
    function getStartCarnivoreCount() {
        return $this->startCarnivoreCount;
    }

    public function setStartCarnivoreCount($par_carnies) {
        $this->startCarnivoreCount = $par_carnies;
    }

    public function generateZeroDay($container) {
        // Populate Grid with Plants
        for ($i = 0; $i < $this->getStartPlantCount(); $i++) {
            $pos = self::findFreePosition();
            $posX = $pos[0];
            $posY = $pos[1];
            $newPlant = new Plant($posX, $posY);
            $container->AddOrganism($newPlant);
            $this->gridToday[$posX][$posY] = 'P'; // 'P' = PLANT
        }
        echo "Plants: ";
        pr($container->getPlants());
        // Populate Grid with Herbivores
        for ($i = 0; $i < $this->startHerbivoreCount; $i++) {
            $pos = self::findFreePosition();
            $posX = $pos[0];
            $posY = $pos[1];
            $newHerbie = new Herbivore($posX, $posY);
            $container->AddOrganism($newHerbie);
            $this->gridToday[$posX][$posY] = 'H'; // 'H' = HERBIVORE
        }
        echo "Herbivores:";
        pr($container->getHerbivores());        
        // Populate Grid with Carnivores
        for ($i = 0; $i < $this->startCarnivoreCount; $i++) {
            $pos = self::findFreePosition();
            $posX = $pos[0];
            $posY = $pos[1];
            $newCarnie = new Carnivore($posX, $posY);
            $container->AddOrganism($newCarnie);
            $this->gridToday[$posX][$posY] = 'C'; // 'C' = CARNIVORE
        }
        echo "Carnivores:";
        pr($container->getCarnivores());
    }

    public function randomSpawn($type) {
        $freeLocation = self::findFreePosition();
        $organisms[$type][] = new $type($freeLocation[0], $freeLocation[1]);
    }

    private function findFreePosition() {
        $dim = $this->dimension;
        do {
            $freePos = mt_rand(0, pow($dim, 2)-1);
            $posX = $freePos % $dim;
            $posY = intval($freePos / $dim);
        } while ($this->gridToday[$posX][$posY] != 'E');
        return [$posX, $posY];
    }

}
