<?php

/*
 * Container class for objects of all three entity classes
 * entity objects (carnivore, herbivore, plant) will be held in an array
 */

class OrganismsContainer {

    private $organisms = ['Plant' => [], 'Herbivore' => [], 'Carnivore' => []];

    public function getPlants() {
        return $this->organisms['Plant'];
    }

    public function getHerbivores() {
        return $this->organisms['Herbivore'];
    }

    public function getCarnivores() {
        return $this->organisms['Carnivore'];
    }

    function getOrganisms() {
        return $this->organisms;
    }

    function addOrganism($organism) {
        $type = get_class($organism);
        $this->organisms[$type][] = $organism;
    }

}
