<?php 
    $students = array("name"=>"ankit","gender"=>true,"weight"=>81.25,"age"=>33);
    $students['city'] = "Bhavnagar";
    $students['state'] = "Gujarat";
    echo "<table border=2 align=center width=50% cellpadding=10>";
    foreach ($students as $key => $value){
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }
    echo "</table>";
    
    echo "<table border=2 align=center width=50% cellpadding=10>";
    foreach ($students as $value){
        echo "<tr><td>$value</td></tr>";
    }
    echo "</table>";
?>