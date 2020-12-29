<?php 
    require_once("../../shop/inc/connection2.php");
    $response = array();//blank array 
    extract($_REQUEST);
    $sql = "delete from student where id=?";
    $statement = $db->prepare($sql);
    $statement->bindparam(1,$id);
    $statement->execute();
    array_push($response,array("success"=>1));
    echo json_encode($response);
?>