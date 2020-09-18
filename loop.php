<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	/* functions */
	require_once("functions.php"); //check if file is previously included or not. it included then it will skip second includance 
	set_time_limit(0); //it will php script as long as it needs  otherwise it will stop after 5 minute 
	//error_reporting(0); //ignore errors
	//check user has not open this page directly
	$ErrorMessage = null;
	if(isset($_POST['btnsubmit'])==false)
	{
		$ErrorMessage = "please submit input";
	}
	else 
	{
		//check both textbox are blank or not 
		$TotalRow = $_POST['txtrow'];
		$TotalColumn = $_POST['txtcolumn'];
		$LoopChoice = $_POST['sltloop'];
		if(empty($TotalRow)==true || empty($TotalColumn)==true)
		{
			$ErrorMessage = "row and column is required input";
		}
		//check both textbox has numbers or not
		else if(is_numeric($TotalRow)==false || is_numeric($TotalColumn)==false)
		{
			$ErrorMessage = "row and column must be numeric input";
		}
		//check user has selected loop and it has value in range of 1 to 3
		else if(empty($LoopChoice)==true)
		{
			$ErrorMessage = "select input";
		}
		else if(is_numeric($LoopChoice)==false)
		{
			$ErrorMessage = "invalid choice";
		}
		else if($LoopChoice<1 || $LoopChoice>3)
		{
			$ErrorMessage = "invalid choice";
		}
		else 
		{
			//valid input 
			switch($LoopChoice)
			{
				case 1: //$LoopChoice ==1 while loop 
					StartTable(1,'yellow','80%','center');
					$row=1; //initilization of loop variable 
					while($row<=$TotalRow) //2<=5
					{
						echo "<tr>";
						$column = 1; //1
						while($column<=$TotalColumn) //1<=3 
						{
							echo "<td>While Loop</td>";
							$column++;
						}
						echo "</tr>";
						$row++;
					}
					FinishTable();
				break;
				
				case 2: //for loop 
					StartTable(2,'cyan');
					for($row=1;$row<=$TotalRow;$row++) //3
					{
						echo "<tr>";
						for($column=1;$column<=$TotalColumn;$column++) //3
						{
							echo "<td>For Loop</td>";
						}
						echo "</tr>";
					}
					FinishTable();
				break;
					
				case 3: //do while loop 
					StartTable(3,'gray','99%');
					$row =1; //initilization
					do 
					{
						echo "<tr>";	
						$column = 1;
						do
						{
							echo "<td>do while loop</td>";	
							$column++;
						}while($column<=$TotalColumn);
						echo "</tr>";	
						$row++;
					}while($row<=$TotalRow);
					FinishTable();
				break;
			}
		}
	}
	if($ErrorMessage!=null)
		header("location:input3.php?error=$ErrorMessage");
?>
</body>
</html>