<?php

class MatrixService {

    private $simMatrix = [];
    private $overviewMatrix = [];

    public function createStartMatrix($plants, $carnivores, $herbivores, $dimension) {
        //to do: make array of objects
        for ($i = 0; $i < $plants; $i++) {
            array_push($this->simMatrix, "plant");
        }
        for ($i = 0; $i < $carnivores; $i++) {
            array_push($this->simMatrix, "carni");
        }
        for ($i = 0; $i < $herbivores; $i++) {
            array_push($this->simMatrix, "herbi");
        }
        for ($i = count($this->simMatrix); $i < pow($dimension, 2); $i++) {
            $this->simMatrix[$i] = null;
        }
        //randomize order content
        shuffle($this->simMatrix);

        //turns into 2dimensional array
        $this->simMatrix = array_chunk($this->simMatrix, $dimension);
        //$this->matrixObjects($dimension, 0);

        //$this->simStorage($this->simMatrix, $dimension);
        return $this->simMatrix;
    }

    /*author: Inneke:*/
    public function getOverview($id) {
        /*
         * $id= id from simulation required
         * to get all grids (days) from one simulation 
         * returns array of arrays
         */
        //to verify with actual classes:
        $overview = new Simulation();
        $days= $overview->getDay();
        $dimension = $overview->getDimension;
        $dayNumber = 0;
        foreach ($days as $day) {           
         
            for ($i = 0; $i < $dimension; $i++) {
                for ($j = 0; $j < $dimension; $j++) {
                    switch (get_class($day[$i][$j])) {
                        case "Plant":
                            $this->simMatrix[$i][$j] = "plant";
                            break;
                        case "Carnivore":
                            $this->simMatrix[$i][$j] = "carni";
                            break;
                        case "Herbivore":
                            $this->simMatrix[$i][$j] = "herbi";
                            break;
                        default:
                            $this->simMatrix[$i][$j] = null;
                            break;
                    }
                }
           }
            array_push($this->overviewMatrix[$dayNumber], $this->simMatrix);
            $daynumber++;
        }
        return $this->overviewMatrix;
    }
    

    public function simStorage($simMatrix, $dimension) {
        for ($i = 0; $i < $dimension; $i++) {
            for ($j = 0; $j < $dimension; $j++) {
                if ($this->simMatrix[$i][$j]) {
                    //create array simdata to put in database
                    $_SESSION["simData"][] = array(
                        'dimension' => $dimension,
                        'day' => 0,
                        'posx' => $i,
                        'posy' => $j,
                        'type' => $this->simMatrix[$i][$j],
                        'lifeforce' => 1,);
                }
            }
        }
    }

}
