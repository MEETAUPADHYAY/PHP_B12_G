<?php 
    require_once '../vendor/autoload.php';
    require_once '../inc/connection2.php';
    use Faker\Factory;
    $sql = "insert into student (email,mobile,gender) values (:email,:mobile,:gender)";
    $statement = $db->prepare($sql);
    $faker = Factory::create();
    for($i=1;$i<=200;$i++)
    {
        $email = $faker->email;
        $mobile = $faker->phoneNumber;
        $gender = rand(0,1);
        $statement->bindparam(":email",$email);
        $statement->bindparam(":mobile",$mobile);
        $statement->bindparam(":gender",$gender);
        $statement->execute();
    }
    echo "200 record added....";
?>