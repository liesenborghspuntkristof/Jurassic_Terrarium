<?php
// INSERT CODE -> FORM INPUT AND RANDOM GENERATOR
$temp_dim = isset($_POST['dimension'])? filter_input($_POST['dimension'], FILTER_VALIDATE_INT) : 6;
$temp_plants = isset($_POST['startNrPlants'])? filter_input($_POST['startNrPlants'], FILTER_VALIDATE_INT) : 4;
$temp_herbies = isset($_POST['startNrHerbivore'])? filter_input($_POST['startNrHerbivore'], FILTER_VALIDATE_INT) : 2;
$temp_carnies = isset($_POST['startNrCarnivore'])? filter_input($_POST['startNrCarnivore'], FILTER_VALIDATE_INT) : 4;
$organismsCount = $temp_plants + $temp_carnies + $temp_herbies;
if ($organismsCount > pow($temp_dim, 2)) {
    // INSERT CODE -> BACK TO FORM + 'TOO CROWDED' MSG
} else {
    $terrariumSim = new Simulation($temp_dim, $temp_plants, $temp_herbies, $temp_carnies);
    $organisms = new OrganismsContainer;
    $terrariumSim->generateZeroDay($organisms);
    for ($day = 1; $day<20; $day++) { // INSERT CODE : SimulationDone???
        // check all herbivores for mating and plant_eating
        for ($i=0; isset($organisms->getHerbivores()[$i]); $i++) {
            $herbie = $organisms->getHerbivores()[$i];
            $neighbour = $herbie->getRightNeighbour($organisms->getOrganisms());
            if ($neighbour instanceof Plant) {
                $herbie->eat($neighbour);
            } elseif ($neighbour instanceof Herbivore) {   
                $herbie->mate();
            } else {
                $herbie->move();
                $herbie->looseLife(1);
            }
        }
        // check all carnivores for fighting and plant_eating
        for ($i=0; isset($organisms->getCarnivores()[$i]); $i++) {
            $carnie = $organisms->getCarnivores()[$i];
            $neighbour = $carnie->getRightNeighbour();
            if ($neighbour instanceof Herbivore) {
                $carnie->eat($neighbour);
            } elseif ($neighbour instanceof Carnivore) {   
                $carnie->fight($neighbour);
            } else {
                $carnie->move();
                $carnie->looseLife(1);
            }
        }
        // grow new plant
    }
        // INSERT CODE -> SHOW SIMULATION END
}