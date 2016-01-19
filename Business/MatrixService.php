<?php

class MatrixService {
    private $simMatrix = [];

    public function createStartMatrix($plants, $carnivores, $herbivores, $dimension) {

        for ($i=0; $i < $plants; $i++) {
            array_push($this->simMatrix,"plant");
        }
        for ($i=0; $i < $carnivores; $i++) {
            array_push($this->simMatrix, "carni");
        }
        for ($i=0; $i < $herbivores; $i++) {
            array_push($this->simMatrix,"herbi");
        }
        for ($i=count($this->simMatrix); $i < pow($dimension , 2); $i++) {
            $this->simMatrix[$i] = null;
        }
        //randomize order content
        shuffle($this->simMatrix);

        //turns into 2dimensional array
        $this->simMatrix = array_chunk($this->simMatrix, $dimension);
        $this->simStorage($this->simMatrix, $dimension);
        
        $_SESSION['matrix'] = $this->simMatrix;
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
