<?php

$inputArray = [7500, 123, 1337];
$printArray = [];

foreach($inputArray as $input) {

	$printArray[] = [
		'result' => calculateRoot($input),
		'input' => $input
	];

}

function calculateRoot($number) {
	/*
		Calculate the number here
	*/
}

foreach($printArray as $result) {
	echo "The multiplicative digital root of ".$result['input']." is ".$result['result'].".".PHP_EOL;
}

