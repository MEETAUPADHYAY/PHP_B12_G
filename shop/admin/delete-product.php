<?php 
    require_once('../inc/connection2.php'); 
    extract($_REQUEST);
    $sql = "update product set isdeleted=1 where id=?";
    $statement = $db->prepare($sql);
    $statement->execute(array($productid));
    $message = "Product deleted";
    header("Location:product.php?message=$message");
?>