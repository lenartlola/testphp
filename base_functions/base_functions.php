<?php

function firstCharInCapital($string) {
    $firstChar = substr($string, 0, 1);
    $firstChar = strtoupper($firstChar);
    $string = substr($string, 1);
    return $firstChar . $string;
}

function splitString($string) {
    $array = explode(" ", $string);
    return $array;
}

function inverseArray($array) {
    $array = array_reverse($array);
    $string = implode(" ", $array);
    return $string;
}

function hasRumya($string) : bool {
    if(strpos($string, "Rumya") !== false){
        return true;
    } else {
        return false;
    }
}

function removeAccent($string) {
    $string = str_replace("é", "e", $string);
    $string = str_replace("è", "e", $string);
    $string = str_replace("ê", "e", $string);
    $string = str_replace("ë", "e", $string);
    $string = str_replace("à", "a", $string);
    $string = str_replace("â", "a", $string);
    $string = str_replace("ä", "a", $string);
    $string = str_replace("ù", "u", $string);
    $string = str_replace("û", "u", $string);
    $string = str_replace("ü", "u", $string);
    $string = str_replace("î", "i", $string);
    $string = str_replace("ï", "i", $string);
    $string = str_replace("ô", "o", $string);
    $string = str_replace("ö", "o", $string);
    $string = str_replace("ç", "c", $string);
    return $string;
}

function biggestValue($array) {
    $biggestValue = $array[0];
    foreach($array as $value) {
        if($value > $biggestValue) {
            $biggestValue = $value;
        }
    }
    return $biggestValue;
}

function mediumValue($array) {
    $sum = 0;
    $sum = array_sum($array);
    $mediumValue = $sum / count($array);
    return $mediumValue;
}

function part_one() {
    echo "++++++++++++++++++++++++ Part one ++++++++++++++++++++++++\n";
    $string = "hello world\n";
    echo firstCharInCapital($string);
}

function part_two() {
    echo "++++++++++++++++++++++++ Part two ++++++++++++++++++++++++\n";
    $string = "Bonjour Angelo est ce que ca va?";
    print_r(splitString($string));

    $array = splitString($string);
    $string = inverseArray($array);
    echo $string."\n";
}

function part_three() {
    echo "++++++++++++++++++++++++ Part three ++++++++++++++++++++++++\n";
    $string = "Bonjour Rumya est ce que ca va?";
    if(hasRumya($string)){
        echo "Rumya est dans la phrase\n";
    } else {
        echo "Rumya n'est pas dans la phrase\n";
    }

    $string = "Bonjour Angelo est ce que ca va?";
    if(hasRumya($string)){
        echo "Rumya est dans la phrase\n";
    } else {
        echo "Rumya n'est pas dans la phrase\n";
    }

    $stringWithAccent = "Hey ça va?";
    echo removeAccent($stringWithAccent)."\n";

    $array = [1, 2, 3, 4, 5, 6, 7, 9, 8];
    echo biggestValue($array)."\n";

    echo mediumValue($array)."\n";
}

function main() {
    part_one();
    part_two();
    part_three();
}

main();