<?php

function aireTriangle($base, $hauteur) {
    return $base * $hauteur / 2;
}

function inverseTableau($tableau) {
    $tableauInverse = array_reverse($tableau);
    return $tableauInverse;
}

function estPair($nombre) {
    return $nombre % 2 == 0;
}

function moyenneTableau($tableau) {
    $sum = 0;
    $sum = array_sum($tableau);
    return $sum / count($tableau);
}

function countVisitors($visits) {
    $visits = strtoupper($visits);
    $visits = str_split($visits);
    $visits = array_count_values($visits);
    arsort($visits);
    return $visits;
}

function part_one() {
    echo "++++++++++++++++++++++++ Part one ++++++++++++++++++++++++\n";
    $base = readline("Entrez la base : ");
    $hauteur = readline("Entrez la hauteur : ");
    if (is_numeric($base) && is_numeric($hauteur)) {
        echo "L'aire du triangle est : " . aireTriangle($base, $hauteur) . "\n";
    } else {
        echo "Error: invalid input.\n";
    }
}

function part_two() {
    echo "++++++++++++++++++++++++ Part two ++++++++++++++++++++++++\n";
    $tableau = [1, 2, 3, 4, 5];
    $tableauInverse = inverseTableau($tableau);
    echo "Tableau : ";
    print_r($tableau);
    echo "Tableau inversé : ";
    print_r($tableauInverse);
    echo "\n";
}

function part_three() {
    echo "++++++++++++++++++++++++ Part three ++++++++++++++++++++++++\n";
    $nombre = readline("Entrez un nombre : ");
    if (is_numeric($nombre)) {
        if (estPair($nombre)) {
            echo "Le nombre est pair.\n";
        } else {
            echo "Le nombre est impair.\n";
        }
    } else {
        echo "Error: invalid input.\n";
    }
}

function part_four() {
    echo "++++++++++++++++++++++++ Part four ++++++++++++++++++++++++\n";
    $tableau = [1, 2, 3, 4, 5];
    echo "Tableau : ";
    print_r($tableau);
    echo "Moyenne : " . moyenneTableau($tableau) . "\n";
}

function part_five() {
    echo "++++++++++++++++++++++++ Part five ++++++++++++++++++++++++\n";
    $visits = readline("Entrez les visites : ");
    if (preg_match("/^[WMC]+$/", $visits)) {
        $visits = countVisitors($visits);
        echo "Visites : ";
        echo $visits['W'] . "W" . $visits['C'] . "C" . $visits['M'] . "M\n";
    } else {
        echo "Error: invalid input.\n";
    }
}

function main() {
    part_one();
    part_two();
    part_three();
    part_four();
    part_five();
}

main();