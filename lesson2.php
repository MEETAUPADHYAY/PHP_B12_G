<html>
	<head>
		<title>
			<?php 
				echo "The easylearn Academy";
			?>
		</title>	
	</head>
	<body>
		<?php 
			date_default_timezone_set("asia/kolkata");
			echo "Today date is " . date("D d-m-Y");
			echo "<br/> Current Time is " . date("h:i:s A");
		?>
	</body>
</html>