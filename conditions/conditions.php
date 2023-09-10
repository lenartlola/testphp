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





function conditions() {
	part_one();
	part_two(19, true);
	part_two(21, false);
	part_two(42, false);
	part_two(1337, false);

}

conditions()

?>
