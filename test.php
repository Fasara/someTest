<?php 

$numStart = 1;
$numEnd = 100;


range($numStart, $numEnd); 

$numbers = range($numStart, $numEnd);

	foreach ($numbers as $number) {


		if ($number % 3 == 0 && $number % 5 == 0) {

			echo "hello";

		} elseif ($number % 3 == 0) {
			
			echo "morning";

		} elseif ($number % 5 == 0) {
			echo "night";

		} else {

			echo $number;

		}
			echo  ", <br>";
	}




