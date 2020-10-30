<?php 
    //https://stackoverflow.com/questions/2411182/how-to-debug-pdo-database-queries/11305187
    require_once '../vendor/autoload.php';
    require_once '../inc/connection2.php';
    use Faker\Factory;
    $sql = "INSERT INTO bill(customerid, amount, billdate, paymentmode, paymentstatus, fullname, address1, address2, city, pincode, mobile, remarks, orderstatus) VALUES (:customerid, :amount, :billdate, :paymentmode, :paymentstatus, :fullname, :address1, :address2, :city, :pincode, :mobile, :remarks, :orderstatus)";
    $statement = $db->prepare($sql);
    $faker = Factory::create();
    for($i=1;$i<=1000;$i++)ord
    {
        $customerid = rand(1,50);
        $statement->bindparam(":customerid",$customerid);
        $amount = rand(1000,50000);
        $statement->bindparam(":amount",$amount);
        $billdate = date("Y-m-d");
        $statement->bindparam(":billdate",$billdate);
        $paymentmode = rand(1,2);
        $statement->bindparam(":paymentmode",$paymentmode);
        $paymentstatus = rand(0,1);
        $statement->bindparam(":paymentstatus",$paymentstatus);
        $fullname = $faker->name;
        $statement->bindparam(":fullname",$fullname);
        $address1 = $faker->address;
        $statement->bindparam(":address1",$address1);
        $address2 = $faker->address;
        $statement->bindparam(":address2",$address2);
        $city = $faker->city;
        $statement->bindparam(":city",$city);
        $postcode = $faker->postcode;
        $statement->bindparam(":pincode",$postcode);
        $mobile = $faker->phoneNumber;
        $statement->bindparam(":mobile",$mobile);
        $remarks = $faker->sentence($nbWords = 20, $variableNbWords = true) ;
        $statement->bindparam(":remarks",$remarks);
        $orderstatus = rand(1,3);
        $statement->bindparam(":orderstatus",$orderstatus);
        $statement->execute();
    }
    echo "1000 record added....";
?>