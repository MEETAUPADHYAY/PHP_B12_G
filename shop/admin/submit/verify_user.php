<?php 
    session_start();
    if($_SERVER['REQUEST_METHOD']!="POST" || isset($_POST['btnsubmit'])==false)
    {
        header("location:../index.php?message=login required");
    }
    else
    {
       require_once("../../inc/connection2.php");
       //step -3 i will build query and run query 
       $email = $_POST['txtemail'];
       $password = md5($_POST['txtpassword']);
       $sql = "select id from admin where email=? and password=?";
       $statement = $db->prepare($sql);
       $input = array($email,$password);
       $statement->execute($input);
       $count = $statement->rowCount(); //return count of records 
        if($count==0)
            header("location:../index.php?message=invalid login attampt");
        else 
        {
            $row = $statement->fetch();
            $_SESSION['id'] = $row['id'];
            header("location:../dashboard.php");
        }
    }
?>