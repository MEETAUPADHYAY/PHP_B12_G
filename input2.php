<html>
	<head>
		<title></title>
	</head>
	<body>
		<h2>Example of Basic Mathematical Calculator</h2>
		<form method="post" action="maths.php" novalidate>
			<table border=2 align=center width="50%" cellpadding="10">
				<tr>
					<td>
						<input type="number" name="txtfirst" required
						 placeholder="First Number" />
					</td>
				</tr>
				<tr>
					<td>
						<input type="number" name="txtsecond" required
						placeholder="Second Number" />
					</td>
				</tr>
				<tr>
					<td>
						<b>Select Operation</b> <br/>
						<input type="radio" name="rdooperation" value="1"  required />Addition <br/>
						<input type="radio" name="rdooperation" value="2"  required /> Substraction <br/>
						<input type="radio" name="rdooperation" value="3"  required /> Multiplication  <br/>
						<input type="radio" name="rdooperation" value="4"  required /> Division
					</td>
				</tr>
				<tr>
					<td align=center>
						<input type="submit" name="btnsubmit" value="Calculate Result" />
					</td>
				</tr>
				
			</table>
		</form>
		
	</body>
</html>