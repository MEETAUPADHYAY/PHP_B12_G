<?php 
    require_once("../../inc/connection2.php");
    $billid = $_POST['billid'];
    $sltpaymentstatus = $_POST['sltpaymentstatus'];
    $sltorderstatus = $_POST['sltorderstatus'];
    $sql = "update bill set orderstatus=?,paymentstatus=? where id=?";
    $statement = $db->prepare($sql);
    $statement->bindparam(1,$sltorderstatus);
    $statement->bindparam(2,$sltpaymentstatus);
    $statement->bindparam(3,$billid);
    $statement->execute();
    $message = "Order processed with id $billid";
    header("location:../order.php?message=$message");
?>