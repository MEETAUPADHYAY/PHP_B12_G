<?php 
	function StartTable($border,$bgcolor,$width='90%',$align='left')
	{
		echo "<table border=$border bgcolor='$bgcolor' width='$width' align='$align'>";
	}
	function FinishTable(){
		echo "</table>";
	}
?>