<?php 
    session_start();
    if(isset($_SESSION['id'])==false)
    {
      header("location:index.php?message=login required");
    }
?>