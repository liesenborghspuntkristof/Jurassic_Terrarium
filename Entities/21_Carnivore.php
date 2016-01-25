<?php

//Carnivore.php

/**
 * Description of Carnivore
 *
 * @author kristof.liesenborghs
 */
class Carnivore extends Dinosaur {

    public function canFight() {
        return ($this->getRightNeighbour() instanceof Carnivore);
    }

    public function fight($enemy) {
        if ($this->lifeForce > $enemy->lifeForce) {
            $this->eat($enemy);
        } else {
            $enemy->eat($this);
        }
    }

}
