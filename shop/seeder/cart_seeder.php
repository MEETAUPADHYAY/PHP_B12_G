<?php 
    require_once '../inc/connection2.php';
    $sql = "INSERT INTO `cart`(`productid`, `quantity`, `price`, `customerid`, `billid`) VALUES (:productid,:quantity,:price,:customerid,:billid)";
    $statement = $db->prepare($sql);
    $products = array(0,1,2,3);
    $price = array(0,95000,45000,6500);
    for($i=1;$i<=1000;$i++)
    {
        $productid = $products[rand(1,3)];
        $statement->bindparam(":productid",$productid);
        $quantity = rand(1,5);
        $statement->bindparam(":quantity",$quantity);
        $Price = $price[rand(1,3)];
        $statement->bindparam(":price",$Price);
        $customerid = rand(1,20);
        $statement->bindparam(":customerid",$customerid);
        $billid = rand(1,10);
        $statement->bindparam(":billid",$billid);
        $statement->execute();
    }
    echo "1000 record added....";
?>