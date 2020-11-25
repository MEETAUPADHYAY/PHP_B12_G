<?php 
    require_once('../inc/verify_login.php'); 
    if($_SERVER['REQUEST_METHOD']!="POST" || isset($_POST['submit'])==false)
    {
        header("location:../category.php?message=input is required");
    }
    else
    {
       require_once("../../inc/connection.php");
       
    }
?>