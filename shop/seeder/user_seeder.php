<?php 
    require_once '../vendor/autoload.php';
    require_once '../inc/connection2.php';
    use Faker\Factory;
    $sql = "insert into customer (email,password,mobile) values (:email,:password,:mobile)";
    $statement = $db->prepare($sql);
    $faker = Factory::create();
    for($i=1;$i<=1000;$i++)
    {
        $email = $faker->email;
        $password = $faker->password;
        $mobile = rand(90,99) . rand(90,99) . rand(10,99) . rand(10,99) . rand(10,99);
        
        $statement->bindparam(":email",$email);
        $statement->bindparam(":password",$password);
        $statement->bindparam(":mobile",$mobile);
        $statement->execute();
    }
    echo "1000 record added....";
?>