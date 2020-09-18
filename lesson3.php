<html>
	<head>
		<title>
			<?php 
				date_default_timezone_set("asia/kolkata");
				//declring variables in php 
				//$variablename = value ;
				$name = "The EasyLearn Academy";
				$year = date("Y");
				echo $name;
			?>
		</title>	
	</head>
	<body>
		<?php 
			echo "Today date is " . date("D d-m-Y");
			echo "<br/> Current Time is " . date("h:i:s A");
			echo "<br/> Current Year is $year";
			$year = true; 
			$year =  2021;
			echo "<br/> now year is  " . $year;
			//echo "<br/> now year is  " . $Year;
		?>
	</body>
</html>