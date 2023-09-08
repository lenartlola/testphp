<?php

function part_one() {
	echo "++++++++++++++++++++++++ Part one ++++++++++++++++++++++++\n";
	$result = 1 + 2;
	echo "1: 1 + 2 = ".$result."\n";
	$result = '1' + '2';
	echo "2: '1' + '2' = ".$result."\n";
	$result = 1 . 2; // Concat
	echo "3: 1 . 2 = ".$result."\n";
	$result = 1.2; // Float
	echo "4: 1.2 = ".$result."\n";
	$result = '1' . '2'; // Concat
	echo "5: '1'. '2' = ".$result."\n";
	$result = "3 fruits" + '1 legume' . 'donnent';
	echo "6: \"3 fruits\" + '1 legume' . 'donnent' = ".$result."\n";
	$result = 1/2 + true;
	echo "7: 1/2 + true = ".$result."\n";
	$result = 1/2 + true - "-2";
	echo "8: 1/2 + true - \"-2\" = ".$result."\n";
}

function part_two() {
	echo "++++++++++++++++++++++++ Part two ++++++++++++++++++++++++\n";
	$x = 8 - 6.4;
	$y = 1.6;
	$epsilon = 0.00001; // Tolerance value

	if (abs($x - $y) < $epsilon) {
    	echo "9: \$x == \$y = 1\n";
	} else {
    	echo "9: \$x == \$y = 0\n";
	}

}

function part_three() {
	echo "++++++++++++++++++++++++ Part three ++++++++++++++++++++++++\n";
	$result = (bool) "";
	$strResult = $result ? 'true' : 'false';
	echo "10: (bool) \"\" = ".$strResult."\n";
	
	$result = (bool) "0";
	$strResult = $result ? 'true' : 'false';
	echo "11: (bool) \"0\" = ".$strResult."\n";
	
	$result = (bool) 1;
	$strResult = $result ? 'true' : 'false';
	echo "12: (bool) 1 = ".$strResult."\n";
	
	$result = (bool) -2;
	$strResult = $result ? 'true' : 'false';
	echo "13: (bool) -2 = ".$strResult."\n";
	
	$result = (bool) "foo";
	$strResult = $result ? 'true' : 'false';
	echo "14: (bool) \"foo\" = ".$strResult."\n";
	
	$result = (bool) 2.3e5;
	$strResult = $result ? 'true' : 'false';
	echo "15: (bool) 2.3e5 = ".$strResult."\n";
	
	$result = (bool) array(12);
	$strResult = $result ? 'true' : 'false';
	echo "16: (bool) array(12) = ".$strResult."\n";
	
	$result = (bool) array();
	$strResult = $result ? 'true' : 'false';
	echo "17: (bool) array() = ".$strResult."\n";
	
	$result = (bool) "false";
	$strResult = $result ? 'true' : 'false';
	echo "18: (bool) \"false\" = ".$strResult."\n";


}

function part_four() {
	echo "++++++++++++++++++++++++ Part four ++++++++++++++++++++++++\n";
	$result = 25/7;
	echo "19: 27/5 = ".$result."\n";
	
	$result = (int)(25/7);
	echo "20: (int)(27/5) = ".$result."\n";
		
	$result = round(25/7);
	echo "21: round(27/5) = ".$result."\n";

}

function part_five() {
	echo "++++++++++++++++++++++++ Part five ++++++++++++++++++++++++\n";
	$i = 0;
	$j = $i++;
	echo "22: \$i++ = ".$j."\n";
	
	$i = 0;
	$j = ++$i;
	echo "23: ++\$i = ".$j."\n";
	
	$i = 0;
	$i += 1;
	echo "24: i + 1 = ".$i."\n";

	$i = 0;
	$i /= 1;
	echo "25: i / 1 = ".$i."\n";

	$i = 10;
	$i /= 0;
	echo "26: i(10) / 0".$i."\n";
}

function main() {
	part_one();
	part_two();
	part_three();
	part_four();
	part_five();
}

main()
?>
