<?php 
    require_once('../inc/verify_login.php'); 
    if($_SERVER['REQUEST_METHOD']!="POST" || isset($_POST['submit'])==false)
    {
        header("location:../change-password.php?message=input is required");
    }
    else
    {
       //first we have to check whether new password and confirm new password match with each other or not 
       extract($_POST);
       if($txtnewpassword!=$txtnewpassword2)
       {
            header("location:../change-password.php?message=new password and confirm new password must be same");
       }
       else 
       {
            //both password are same 
            require_once("../../inc/connection2.php");
            $HashedPassword = md5($txtcurrentpassword);
            $sql="select id from admin where id=? and password=?";
            $statement = $db->prepare($sql);
            $statement->bindparam(1,$_SESSION['id']);
            $statement->bindparam(2,$HashedPassword);
            $statement->execute();
            $count = $statement->rowCount();
            if($count==0) #no record found
                header("location:../change-password.php?message=Invalid current password");
            else 
            {
                //password is valid means record found so now we prepare and run update query 
                $sql = "update admin set password=? where id=?";
                $statement = $db->prepare($sql);
                $NewHashedPassword = md5($txtnewpassword);
                $statement->bindparam(2,$_SESSION['id']);
                $statement->bindparam(1,$NewHashedPassword);
                $statement->execute();
                header("location:../logout.php?message=Password changed");
            }
       }
    }
?>