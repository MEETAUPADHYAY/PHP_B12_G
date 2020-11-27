<?php 
    require_once("../../inc/connection2.php");
    extract($_POST);
    if(isset($btnsubmit)==false)
    {
        //someone has directly opened this page so send user on add-product.php 
        header("location:../forgot-password.php?message=input required");
    }
    else 
    {
        
        try
        {
            $sql = "select id from admin where email=?";
            $statement = $db->prepare($sql);
            $statement->bindparam('1',$txtemail);
            $statement->execute(); 
            $count = $statement->rowCount();
            if($count==0) //record not round
            {
                header("location:../forgot-password.php?message=input required");
            }
            else 
            {
                $Password = rand(10,99) . rand(10,99) . rand(10,99) . rand(10,99);
                $HashedPassword =  md5($Password);
                $sql = "update admin set password = ? where email = ?";
                $statement = $db->prepare($sql);
                $statement->bindparam('1',$HashedPassword);
                $statement->bindparam('2',$txtemail);
                $statement->execute(); 
                require_once("../../inc/mail_function.php");
                $subject = "Attention, Password Recovery Mail";
                $message = "Hi $txtemail <br/> we have just recover your account with $txtemail <br/> your new password is $Password";
                $response = SendMail($txtemail,$subject,$message);
                if($response==1)
                    $message =  "Mail has been sent";
                else 
                $message =  "Mail has not been sent";
            }
            //$message = "Product added";
            header("location:../index.php?message=$message");
        }
        catch(PDOException $error)
        {
            LogError($error,"insert-product.php",28);
            $message = "Error Occured....";
        }
    }
?>