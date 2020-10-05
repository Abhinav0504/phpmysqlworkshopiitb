<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action = "special1.php" method = "GET" >
		<input type = 'text' name = 'side1' placeholder="Enter Side">
		<br>
		<input type = 'text' name = 'side2' placeholder="Enter Side">
		<br>
		<input type = 'text' name = 'side3' placeholder="Enter Side">
		<br>
		<input type="submit" name="submit" value="Submit">
		<br>

	</form>

	<?php
		if(isset($_GET['submit']))
		{
			$side1 = $_GET['side1'];
			$side2 = $_GET['side2'];
			$side3 = $_GET['side3'];


			if ($side1 == $side2 && $side2 == $side3)
				echo "Triangle is equilateral";
			
			else if ($side1 == $side2 or $side2 == $side3 or $side1 == $side3)
				echo "Triangle is Isosceles";
			
			else if($side1*$side1 == ($side2*$side2 + $side3*$side3) || $side2*$side2 == ($side1*$side1 + $side3*$side3) || $side3*$side3 == ($side2*$side2 + $side1*$side1))
				echo "Triangle is Right Angled Triangle";

			else
				echo "Triangle is Scalene";
			
		}

	?>



</body>
</html>