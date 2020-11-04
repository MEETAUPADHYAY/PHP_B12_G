<?php
    //numeric array 
    //first type
    $cars = array("TATA","AUDI","BMW","Ferrari");
    $carsize = sizeof($cars); //sizeof array function return size of array
    
    for($i=0;$i<$carsize;$i++)
    {
        echo "<br/> $cars[$i] is at $i position";
    }
    $languages[0] = "PHP";
    $languages[1] = "javascript";
    $languages[2] = "PYTHON";
    $languages[3] = "java";
    $languagesize = sizeof($languages);
    
    $i=0;
    while($i<$languagesize)
    {
        echo "<br/> $languages[$i] is at $i position";
        $i++;
    }
    
    $friends[] = "Nikunj";
    $friends[] = "Kartik";
    $friends[] = "Samir";
    $friends[] = "Nikunj";
    
    $i=0;
    while($i<sizeof($friends))
    {
        echo "<br/> $friends[$i] is at $i position";
        $i++;
    }
    echo "<br/>";
    print_r($cars);
    echo "<br/>";
    print_r($languages);
    echo "<br/>";
    print_r($friends);
    
    $students = array("name"=>"jiya","gender"=>false,"weight"=>17.25,"age"=>8);
    $students['city'] = "Bhavnagar";
    $students['state'] = "Gujarat";
    print_r($students);
    
    
    
?>