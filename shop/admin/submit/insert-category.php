<?php 
    //check request method
    //echo $_SERVER['REQUEST_METHOD'];
    if($_SERVER['REQUEST_METHOD']!="POST" || isset($_POST['btnsubmit'])==false)
    {
        header("location:../category.php?message=input is required");
    }
    else
    {
       //step -1 connect with database server 
       $link = mysqli_query("localhost","root","");
       //step -2 select database database
       mysqli_select_db($link,"php_b12_g");
       //step -3 i will build query and run query 
       $title = $_POST['txttitle'];
       $detail = $_POST['txtdetail'];
       $islive = $_POST['rdoislive'];
       $photo = $_FILES['filphoto']['name'];
       $sql = "insert into category ('title','detail','photo','islive') values ('$title','$detail','$photo','$islive')";
       //insert update delete select , we use mysqli_query
       mysqli_query($link,$sql) or die(mysqli_error($link));
       $message = "Category Added Successfully";
       header("location:../category.php?message=input is required");
    }
?>