<?php 
    require_once("../../inc/connection2.php");
    extract($_POST);
    if(isset($btnsubmit)==false)
    {
        //someone has directly opened this page so send user on add-product.php 
        header("location:../product.php");
    }
    else 
    {
        //user has submitted form properly so now use data given by user to add update existing record into table 
        try
        {
            if(strlen($_FILES['filphoto']['name'])>=1) //user has selected photo 
            {
                $photo = rand(10,99) . rand(10,99) . rand(10,99) . "-" . $_FILES['filphoto']['name'];
                unlink("../../images/product/$oldphoto");
            }
            else 
            {
                $photo = $oldphoto;
            }
            $sql = "update product set categoryid=:category, title=:title, detail=:detail, price=:price, stock=:stock, weight=:weight, size=:size, photo=:photo,islive=:islive where id=:productid";
            $statement = $db->prepare($sql);
            $statement->bindparam(':category',$sltcategoryid);
            $statement->bindparam(':title',$txttitle);
            $statement->bindparam(':detail',$txtdetail);
            $statement->bindparam(':price',$txtprice);
            $statement->bindparam(':stock',$txtquantity);
            $statement->bindparam(':weight',$txtweight);
            $statement->bindparam(':size',$txtsize);
            $statement->bindparam(':photo',$photo);
            $statement->bindparam(':islive',$rdoislive);
            $statement->bindparam(':productid',$productid);
    
            $statement->execute(); 
            if(strlen($_FILES['filphoto']['name'])>=1) //user has selected photo 
                move_uploaded_file($_FILES['filphoto']['tmp_name'],"../../images/product/$photo");
            $message = "Product updated";
            
        }
        catch(PDOException $error)
        {
            LogError($error,"update-product.php",36);
            $message = "Error Occured....";
        }
        header("Location:../product.php?message=$message");
    }
?>