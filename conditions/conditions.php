<?php

function part_one() {
	echo "++++++++++++++++++++++++ Part one ++++++++++++++++++++++++\n";
	$i = 4;
	if ($i = 4) {
		echo "Yes!\n";
	}

	$i = 4;
	if ($i == 4) {
		echo "Yes!\n";
	}

	$i = '4';
	if ($i == 4) {
		echo "Yes!\n";
	}

	$i = '4';
	if ($i === 4) {
		echo "Yes!\n";
	} else {
		echo "No!\n";
	}

	$i = 4;
	if ($i === 4) {
		echo "Yes!\n";
	}
}

function part_two($arg, $banner) {
	if ($banner) {
		echo "++++++++++++++++++++++++ Part two ++++++++++++++++++++++++\n";
	}
	if ($arg < 20) {
		echo "A\n";
	} else if (20 <= $arg && $arg <= 30) {
		echo "B\n";
	} else if (30 < $arg && $arg <= 100) {
		echo "C\n";
	} else {
		echo "D\n";
	}
}

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
	echo "++++++++++++++++++++++++ Part three ++++++++++++++++++++++++\n";
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


function conditions() {
	part_one();
	part_two(19, true);
	part_two(21, false);
	part_two(42, false);
	part_two(1337, false);
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

conditions()

?>
