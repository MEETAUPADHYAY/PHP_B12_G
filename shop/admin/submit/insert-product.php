<?php 
    require_once("../../inc/connection2.php");
    extract($_POST);
    if(isset($btnsubmit)==false)
    {
        //someone has directly opened this page so send user on add-product.php 
        header("location:../add-product.php?message=input required");
    }
    else 
    {
        //user has submitted form properly so now use data given by user to add new record into table 
        try
        {
            $photo = rand(10,99) . rand(10,99) . rand(10,99) . "-" . $_FILES['filphoto']['name'];
            $sql = "INSERT INTO product(categoryid, title, detail, price, stock, weight, size, photo,islive) VALUES (:category,:title,:detail,:price,:stock,:weight,:size,:photo,:islive)";
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
    
            $statement->execute(); 
            move_uploaded_file($_FILES['filphoto']['tmp_name'],"../../images/product/$photo");
            $message = "Product added";
            
        }
        catch(PDOException $error)
        {
            LogError($error,"insert-product.php",28);
            $message = "Error Occured....";
        }
        header("Location:../product.php?message=$message");
    }
?>