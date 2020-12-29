<?php 
    require_once("../../shop/inc/connection2.php");
    $response = array();//blank array 
    $sql = "select * from student order by id desc";
    $statement = $db->prepare($sql);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $statement->execute();
    while($row=$statement->fetch())
        array_push($response,$row);
    echo json_encode($response);
?>