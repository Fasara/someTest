<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
	<?php

	//set the variables to the input element
	if (isset($_POST["start_number"])) {

		$numStart = (int) $_POST["start_number"]; 

		echo "<li>\n";

	} else {

		$numStart = 1;

	}

	if(isset($_POST["end_number"]))	{

		$numEnd = (int) $_POST["end_number"];

	} else {

		$numEnd = 100;
	}

	if (isset($_POST["divisible_by_3_number"])) {

		$divisibleBy3Num = (int) $_POST["divisible_by_3_number"];

	} else {

		$divisibleBy3Num = 3;

	}

	if(isset($_POST["divisible_by_5_number"])) {

		$divisibleBy5Num = (int) $_POST["divisible_by_5_number"];

	} else {

		$divisibleBy5Num = 5;

	}

		//print 'Fizz', 'Buzz', and 'FizzBuzz words by default 

	if(isset($_POST["by_3"])) {

		
		$divisibleBy3Word = $_POST["by_3"];

	} else {


		$divisibleBy3Word = "Fizz";
	}

	if(isset($_POST["by_5"])) {

		$divisibleBy5Word = $_POST["by_5"];

	} else {

		$divisibleBy5Word = "Buzz";
	}


	if(isset($_POST["by_3and_5"])) {

		$divisibleBy3and5Word = $_POST["by_3and_5"];

	} else {

		$divisibleBy3and5Word = "FizzBuzz";

		echo "</li>\n";

	}

	?>
	<h1>Fizz Buzz</h1>
	<div id="container">
		<form method="POST" action="test.php">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-2 form-input">
					<label for="start_number">Start Number</label>
					<input type="number" name="start_number" value="<?= $numStart; ?>">
					<span>Enter the start number</span>
				</div>	
				<div class="col-sm-6 col-md-4 col-lg-2 form-input">
					<label for="name">End Number</label>
					<input type="number" name="end_number" value="<?= $numEnd; ?>">
					<span>Enter the end number</span>	
				</div>
				<div class="col-sm-6 col-md-4 col-lg-2  form-input">
					<label for="name">Word for divisible by 3</label>
					<input type="text" name="by_3" value="<?= $divisibleBy3Word; ?>">
					<span>Enter a word</span>	
				</div>
				<div class="col-sm-6 col-md-4 col-lg-2  form-input">
					<label for="name">Word for divisible by 5</label>
					<input type="text" name="by_5" value="<?= $divisibleBy5Word; ?>">
					<span>Enter a word</span>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-2  form-input">
					<label for="name">Word for divisible by 3 and 5</label>
					<input type="text" name="by_3and_5" value="<?= $divisibleBy3and5Word; ?>">
					<span>Enter a word</span>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-2 form-input">
					<label for="name">Divisible by 3 number</label>
					<input type="number" name="divisible_by_3_number" value="<?= $divisibleBy3Num; ?>">
					<span>Enter a number</span>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-2  form-input">
					<label for="name">Divisible by 5 number</label>
					<input type="number" name="divisible_by_5_number" value="<?= $divisibleBy5Num; ?>">
					<span>Enter a number</span>
				</div>
			</div>
			<button type="submit" class="btn btn-primary btn-lg btn-go">Go</button>
		</form>
	</div>

	<div id="exerciseholder">

		<?php 


		echo "Start number is " . $numStart;
		echo "<br/>";
		echo "End number is " . $numEnd;
		echo "<br/>";

		
		

		$numbers = range($numStart, $numEnd);


		foreach ($numbers as $number) {

			echo "<li>\n";	

			if ($number % $divisibleBy3Num == 0 && $number % $divisibleBy5Num == 0) {


				echo $divisibleBy3and5Word;


			} elseif ($number % $divisibleBy3Num == 0) {

				echo $divisibleBy3Word; 

			} elseif ($number % $divisibleBy5Num == 0) {

				echo $divisibleBy5Word;

			} else {

				echo $number;

			}

			echo " ";

			echo "</li>\n";
		}

		?>	
		
	</div>
</body>
</html>

