<?php
function ret_int() : int{
    return "3.14"; // Technically incorrect, should return an int and not float.
}

function ret_float() : ?float {
    return null; // Correct, either float or null
}

function ret_float1() : float {
    return "3.14"; // Correct, I think the php interpreter does dynamic casting, could be wrong tho
}

function ret_float2() : float {
    return (float)"3.14"; // Correct, float casting
}

/*
function ret_void() : void {
	return null; Incorrect;
}
 */

/*
function ret_void1() : ?void {
	return null; Incorrect;
}
 */

function div($first, $second) : float {
    echo "++++++++++++++++++++++++ Part one ++++++++++++++++++++++++\n";
    return $first / $second;
}

function compar($first, $second) : float {
    return ($first < $second) ? $first : $second;
}

function capital($country) : string {
    switch ($country) {
        case "Suisse":
            return "Berne";
        case "France":
            return "Paris";
        case "Allemagne":
            return "Berlin";
        case "Italie":
            return "Rome";
        default:
            return "Inconnu";
    }
}

function main() {
    $ret = div(42, 21);
    echo "42 / 21 = ".$ret."\n";
    $ret = compar(42, 21);
    echo "42, 21 compar = ".$ret."\n";
    $ret = compar(13, 37);
    echo "13, 37 compar = ".$ret."\n";
    $cap = capital("Suisse");
    echo "Suisse capitale = ".$cap."\n";

    $cap = capital("France");
    echo "France capitale = ".$cap."\n";

    $cap = capital("Allemagne");
    echo "Allemagne capitale = ".$cap."\n";

    $cap = capital("Italie");
    echo "Italie capitale = ".$cap."\n";

    $cap = capital("USA");
    echo "USA capitale = ".$cap."\n";
}

main();