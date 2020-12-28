<?php 
    require_once("../../shop/inc/connection2.php");
    $response = array();//blank array 
    extract($_POST);
    $sql = "insert into student (email,mobile,gender) values (?,?,?)";
    $statement = $db->prepare($sql);
    $statement->bindparam(1,$txtemail);
    $statement->bindparam(2,$txtmobile);
    $statement->bindparam(3,$rdogender);
    $statement->execute();
    $id = $db->lastInsertId(); //it returns id of last inserted record
    array_push($response,array("id"=>$id));
    echo json_encode($response);
?>