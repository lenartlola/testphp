<?php

// Class Animal {
//     public function marcher() {
//         $steps = 0;
//         while (true) {
//             echo "Je marche\n";
//             $steps++;
//         }
//     }
// }

trait Marcher {
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

class Chat {
    use Marcher;
}

class Canard {
    use Marcher;
    use Nageur;
}

class Poisson {
    use Nageur;
}

function main() {
    $canard = new Canard();
    $canard->nager(); // Not a good idea, infinite loop :)
}
main();