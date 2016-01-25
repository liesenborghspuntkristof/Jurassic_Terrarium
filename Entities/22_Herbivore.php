<?php

//Herbivore.php

/**
 * Description of Herbivore
 *
 * @author kristof.liesenborghs
 */
class Herbivore extends Dinosaur {

    public function mate($posX, $posY) {
        return new Herbivore($posX, $posY);
    }
}
