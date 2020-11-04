<?php 
    //array related functions
    //user defined function 
    function PrintArray($arr,$message=null)
    {
        if(is_array($arr))
        {
            echo "<hr/> $message <br/>";
            print_r($arr);
            echo "<hr/>";
        }
    }
    $numbers = array(10,25,99,45,-25,100,1254,0);
    PrintArray($numbers);
    sort($numbers,SORT_NUMERIC);
    PrintArray($numbers);
    $numbers = array_reverse($numbers);
    PrintArray($numbers,"it is reversed array");
    $friends = array("Martin","Joe","rocky","miky","Bob");
    PrintArray($friends);
    asort($friends,SORT_STRING);
    PrintArray($friends);
    echo "<br/> Size of number array " . count($numbers);
    echo "<br/> Size of friends array " . sizeof($friends);
?>