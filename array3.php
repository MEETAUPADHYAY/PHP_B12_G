<?php 
    $languages=array(
    "PHP"=>array("duration"=>3,"fees"=>8500),
    "PYTHON"=>array("duration"=>4,"fees"=>8500),
    "Flutter"=>array("duration"=>3,"fees"=>9500)
    );
    print_r($languages);
    var_dump($languages);
    
    echo "<br/>";
    
    $FeesTotal = 0;
    foreach ($languages as $OuterKey => $OuterValue) {
       //print_r($OuterValue);
       foreach ($OuterValue as $key => $value) {
           if($key=="fees")
                $FeesTotal = $FeesTotal + $value;
       }
    }
    echo "<br/> Total fees = " . $FeesTotal;
?>