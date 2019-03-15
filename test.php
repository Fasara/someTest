<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
	<h1>Event Registration Form</h1>
	<div id="container">
		<form method="POST" action="/someTest/test.php">
			<ul>
				<li>
					<label for="name">Start Number</label>
					<input type="number" name="start_number" required>
					<span>Enter the start number</span>	
				</li>
				<li>
					<label for="name">End Number</label>
					<input type="number" name="end_number" required>
					<span>Enter the end number</span>	
				</li>
				<li>
					<label for="name">Word for divisible by 3</label>
					<input type="text" name="by_3">
					<span></span>	
				</li>
		</ul>
		<button type="submit" class="register">Go</button>
	</form>
</div>



<div id="exerciseholder">

	<?php 

	$numStart = (int) $_POST["start_number"];
	$numEnd = (int) $_POST["end_number"];

	$divisibleBy3Word = $_POST["by_3"];

	echo "Start number is " . $numStart;
	echo "<br/>";
	echo "End number is " . $numEnd;
	echo "<br/>";

	$numbers = range($numStart, $numEnd);

	foreach ($numbers as $number) {


		if ($number % 3 == 0 && $number % 5 == 0) {

			echo "hello";

		} elseif ($number % 3 == 0) {

			echo $divisibleBy3Word;

		} elseif ($number % 5 == 0) {
			echo "night";

		} else {

			echo $number;

		}
		echo  ", <br>";

	}

	?>
</div>

</body>
</html>

