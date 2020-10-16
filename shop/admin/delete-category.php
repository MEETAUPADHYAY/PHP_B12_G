<?php  
	require_once("../inc/connection.php");  
	$id=$_REQUEST['id'];
	$sql="update category set isdeleted=1 where id=$id";
	mysqli_query($link,$sql) or die(mysqli_error($link));
	header("location:category.php?message=category deleted");
?>
