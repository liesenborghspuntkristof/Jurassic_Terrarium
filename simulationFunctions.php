<?php
function generateDay0() {
    
   for ($i=0; $i<$_SESSION["startNrPlants"]; $i++)
   $startSimArray[] = "P";
   for ($i=0; $i<$_SESSION["startNrCarnivores"]; $i++)
   $startSimArray[] = "C";
   for ($i=0; $i<$_SESSION["startNrHerbivores"]; $i++)
   $startSimArray[] = "H";
   for ($i=count($startSimArray); $i<$_SESSION["dimension"] ** 2; $i++) 
   $startSimArray[] = null;
   shuffle($startSimArray);
   
   return $startSimArray;
}
function spawnPlants($simulation) {
    
    $SPAWNPROBABILITY = 25; // percentage

    $emptyFields = array_keys($simulation, null); 
    print_r($emptyFields); 
    $emptyFields = array_fill_keys($emptyFields, null);
    print_r($emptyFields); 

    for ($i=0; $i < count($simulation);$i++) 
        if (array_key_exists($i, $emptyFields) && mt_rand(0, 99) < $SPAWNPROBABILITY)
                $emptyFields[$i] = 'P';
        
    $simulationPlantsSpawned = array_replace($simulation, $emptyFields);   
   
    return $simulationPlantsSpawned;
}

function eat($simulation) {
    
    //eat herbivores
//    $Hlocation = array_keys($simulation, 'H');
//    foreach ($Hlocation as $herbivore) {
//        if (((($herbivore + 1) % ($_SESSION["dimension"])) != 0) && ($simulation[$herbivore + 1] == 'P')) {
//            $simulation[$herbivore + 1] = null;
//            // TODO $Session["Simdata"][lifeforce++] for $herbivore 
//        }
//    }
    // TODO eat carnivores
    
    return $simulation;
}

function love($simulation) {
  
    return $simulation;
}

function fight($simulation) {
   
    return $simulation;
}

function move($simulation) {
    
    return $simulation;
}



