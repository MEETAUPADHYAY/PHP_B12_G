<?php 
    require_once("../../shop/inc/connection2.php");
    $response = array();//blank array 
    extract($_POST);
    $sql = "update student set email=?,mobile=?,gender=? where id=?";
    $statement = $db->prepare($sql);
    $statement->bindparam(1,$txtemail);
    $statement->bindparam(2,$txtmobile);
    $statement->bindparam(3,$rdogender);
    $statement->bindparam(4,$studentid);
    $statement->execute();
    array_push($response,array("success"=>1));
    echo json_encode($response);
?>