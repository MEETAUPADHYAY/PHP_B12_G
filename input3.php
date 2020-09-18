<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<form action="loop.php" method="post">
  <table width="80%" border="1" align="center" cellpadding="5" cellspacing="5">
    <tbody>
      <tr>
        <td colspan="2" align="center"><h2>HTML TABLE GENERATOR</h2></td>
      </tr>
      <tr>
        <td width="15%">Row</td>
        <td width="85%"><input type="number" name="txtrow" id="number" required></td>
      </tr>
      <tr>
        <td>Column</td>
        <td><input type="number" name="txtcolumn" id="number2" required></td>
      </tr>
      <tr>
        <td>Loop</td>
        <td><label for="select">:</label>
          <select name="sltloop" id="select" required>
            <option value="">select</option>
            <option value="1">while loop</option>
            <option value="2">for loop</option>
            <option value="3">do while eloop</option>
        </select></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="btnsubmit" id="submit" value="Generate table"></td>
      </tr>
      <?php 
			if(isset($_REQUEST['error'])==true)
				echo "<tr><td colspan='2' align=center><font color='red'>{$_REQUEST['error']}</font></td></tr>";
	   ?>
    </tbody>
  </table>
</form>
</body>
</html>