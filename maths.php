<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div>
		<p>
			<h2>Basic Mathamatical Calculator Result</h2> <hr/>
		</p>
		<?php 
			//check button is submitted or not 
			if(isset($_POST['btnsubmit'])==false)
			{
				echo "input is required";
			}
			else 
			{
				// first check textboxes are empty or not 
				$first=$second=$operation=$result=0; //chain assignment
				$first = $_POST['txtfirst'];
				$second = $_POST['txtsecond'];
				//var_dump($_POST);
				if(empty($first)==true || empty($second)==true)
				{
					echo "one or more textbox is/are empty";
				}
				// second check textboxes has only numbers/digits 
				else if(is_numeric($first)==false || is_numeric($second)==false)
				{
					echo "one or more textbox has invalid input (only digits are allowed)";
				}
				// third check radio button is selected or not 
				else if(isset($_POST['rdooperation'])==false)
				{
					echo "one operation must be selected";
				}
				//check radio button has valid value
				else if(is_numeric($_POST['rdooperation'])==false)
				{
					echo "invalid input";
				}
				//check radio button is in range or not 
				else if($_POST['rdooperation']<1 || $_POST['rdooperation']>4)
				{
					echo "invalid input";
				}
				else 
				{
					$operation = $_POST['rdooperation'];
					//echo "$first $second $operation";
					
					if($operation==1)
					{
						$result = $first + $second;
					}
					else if($operation==2)
					{
						$result = $first - $second;
					}
					else if($operation==3)
					{
						$result = $first * $second;
					}
					else 
					{
						$result = round($first / $second,2);
						//$result = round($result);
					}
					echo "<br/> Result is $result";
				}
			}
			
		?>
	</div>
</body>
</html>