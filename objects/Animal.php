<?php

Class Animal {
    public function marcher() {
        $steps = 0;
        while (true) {
            echo "Je marche\n";
            $steps++;
        }
    }
}

trait Nageur {
    public function nager() {
        $laps = 0;
        while (true) {
            echo "Je nage\n";
            $laps++;
        }
    }
}

class Chat extends Animal {

}

class Canard extends Animal {
    use Nageur;
}

function main() {
    $canard = new Canard();
    $canard->nager(); // Not a good idea, infinite loop :)
}
main();