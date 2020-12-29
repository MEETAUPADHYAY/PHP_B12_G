<?php 
    $response = array();//blank array 
    date_default_timezone_set("asia/kolkata");
    $day = date("d"); //return day of month 
    $month = date("m");
    $year = date("Y");
    
    $hour = date("h"); //return day of month 
    $minute = date("i");
    $second = date("s");
    
    $mydate = array("day"=>$day,"month"=>$month,"year"=>$year,"hour"=>$hour,"minute"=>$minute,"second"=>$second);
    array_push($response,$mydate);
    
    echo json_encode($response);
?>