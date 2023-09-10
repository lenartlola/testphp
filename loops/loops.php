<?php

function part_one($pays_population) {
        echo "++++++++++++++++++++++++ Part one ++++++++++++++++++++++++\n";
        $n_pays = count($pays_population);
        echo "Il y a $n_pays pays dans le tableau\n";
        $index = 0;
        $pays_population_inf_20M = array();
        foreach ($pays_population as $pays => $population) {
            if ($population < 20000000) {
                $index++;
                $pays_population_inf_20M[$index] = $pays;
            }
        }
        echo "Il y a $index pays avec une population inférieure à 20M\n";
        echo "Liste des pays avec une population inférieure à 20M :\n";
        foreach ($pays_population_inf_20M as $pays) {
            echo "$pays\n";
        }
}

function part_two() {
    echo "++++++++++++++++++++++++ Part two ++++++++++++++++++++++++\n";
    $random_numbers = array();
    for ($i = 0; $i < 10; $i++) {
        $random_numbers[$i] = rand(1, 100);
    }

    if (in_array(42, $random_numbers)) {
        echo "42 est dans le tableau\n";
    } else {
        echo "42 n'est pas dans le tableau\n";
    }
}

function part_three() {
    echo "++++++++++++++++++++++++ Part three ++++++++++++++++++++++++\n";
    $i = 0;
    while ($i < 10) {
        $i++;
    }
    echo $i . "\n";

    $i = 0;
    do {
        $i++;
    } while ($i < 10);
    echo $i . "\n";

    $i = 10;
    do {
        $i++;
    } while ($i < 10);
    echo $i . "\n";
}

function main() {
    $pays_population  = array(
        'France' => 67595000,
        'Suede' => 9998000,
        'Suisse' => 8417000,
        'Kosovo' => 1820631,
        'Malte' => 434403,
        'Mexique' => 122273500,
        'Allemagne' => 82800000,
    );

    part_one($pays_population);
    part_two();
    part_three();
}

main();