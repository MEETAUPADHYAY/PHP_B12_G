<?php 
    require_once("../../inc/connection.php");
    //check user has selected photo or not 
    if(strlen($_FILES['filphoto']['name'])>=1) //user has selected new photo 
    {
        unlink("../../images/category/" . $_POST['oldphoto']);
        $photo = rand(10,99) . rand(10,99) . rand(10,99) . "-" . $_FILES['filphoto']['name'];
        move_uploaded_file($_FILES['filphoto']['tmp_name'],"../../images/category/$photo");
    }
    else 
    {
        $photo = $_POST['oldphoto'];
    }
    $title = $_POST['txttitle'];
    $detail = $_POST['txtdetail'];
    $islive = $_POST['rdoislive'];
    $id = $_POST['categoryid'];
    $sql = "update category set title='$title',detail='$detail',islive='$islive',photo='$photo' where id=$id";
    mysqli_query($link,$sql) or die(mysqli_error($link));
    $message =  "category updated successfully";
    header("location:../category.php?message=$message");
?>