<html>
	<head>
		<title></title>
	</head>
	<body>
		<h2>Simple Interest Calculator</h2>
		<hr/>
		<form method="post" action="process.php">
			<table width="60%" border=2 align=center>
				<tr>
					<td>Amount</td>
				</tr>
				<tr>
					<td>
						<input type="number" name="txtamount" required />
					</td>
				</tr>
				<tr>
					<td>Rate</td>
				</tr>
				<tr>
					<td>
						<input type="number" name="txtrate" required />
					</td>
				</tr>
				<tr>
					<td>Year</td>
				</tr>
				<tr>
					<td>
						<input type="number" name="txtyear" required />
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="btnsubmit" value="Calculate Interest" />
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>