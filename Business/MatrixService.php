<?php

class MatrixService {

    public function createStartMatrix($plants, $carnivores, $herbivores, $dimension) {
        //Amount plants, carnivores & herbivores pushed into array
        for ($i = 0; $i < $plants; $i++) {
            $simMatrix[] = "plant";
        }
        for ($i = 0; $i < $carnivores; $i++) {
            $simMatrix[] = "carni";
        }
        for ($i = 0; $i < $herbivores; $i++) {
            $simMatrix[] = "herbi";
        }
        for (count($simMatrix); $i < $dimension ** 2; $i++) {
            $simMatrix[] = null;
        }

        //randomize order content
        shuffle($simMatrix);

        //turns into 2dimensional array
        $simMatrix = array_chunk($simMatrix, $dimension);
        $this->simStorage($simMatrix, $dimension);
        
        return $simMatrix;
    }

    public function simStorage($simMatrix, $dimension) {
        for ($i = 0; $i < $dimension; $i++) {
            for ($j = 0; $j < $dimension; $j++) {
                if ($simMatrix[$i][$j]) {
                    //create array simdata to put in database
                    $_SESSION["simData"][] = array(
                        'dimension' => $dimension,
                        'day' => 0,
                        'posx' => $i,
                        'posy' => $j,
                        'type' => $simMatrix[$i][$j],
                        'lifeforce' => 1,);
                }
            }
        }
    }

}
