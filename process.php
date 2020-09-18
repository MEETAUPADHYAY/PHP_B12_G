<html>
	<head>
		<title></title>
	</head>
	<body>
		<h2>Result</h2>
		<?php 
			//variable declration 
			$amount = 0;
			$rate = 0;
			$year = 0;
			$amount = $_POST['txtamount'];
			$rate = $_POST['txtrate'];
			$year = $_POST['txtyear'];
			
			echo "$amount $rate $year";
			
			//interest calculate formula
			$interest = ($amount * $rate * $year)/100;
			echo "<br/> " . $interest;
			
		?>
	</body>
</html>