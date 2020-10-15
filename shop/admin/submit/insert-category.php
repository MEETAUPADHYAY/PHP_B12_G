<?php 
    //check request method
    //echo $_SERVER['REQUEST_METHOD'];
    if($_SERVER['REQUEST_METHOD']!="POST" || isset($_POST['btnsubmit'])==false)
    {
        header("location:../category.php?message=input is required");
    }
    else
    {
       require_once("../../inc/connection.php");
       //step -3 i will build query and run query 
       $title = $_POST['txttitle'];
       $detail = $_POST['txtdetail'];
       $islive = $_POST['rdoislive'];
       $photo = rand(10,99) . rand(10,99) . rand(10,99) . "-" . $_FILES['filphoto']['name'];
       move_uploaded_file($_FILES['filphoto']['tmp_name'],"../../images/category/$photo");
       $sql = "insert into category (title,detail,photo,islive) values ('$title','$detail','$photo','$islive')";
       //echo $sql; exit(1);
       //insert update delete select , we use mysqli_query
       mysqli_query($link,$sql) or die(mysqli_error($link));
       $message = "Category Added Successfully";
    
       header("location:../category.php?message=$message");
    }
?>