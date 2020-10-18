<?php 
    echo $_SERVER['DOCUMENT_ROOT'] . $_SERVER['SCRIPT_NAME']; 
    foreach($_SERVER as $Key=>$value)
    {
        echo "<br/> $Key has $value";
    }
?>