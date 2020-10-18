<?php 
    date_default_timezone_set("asia/kolkata");
    define("FILENAME",$_SERVER['DOCUMENT_ROOT'] ."/PHP_B12_G/shop/inc/error.log");
    define("ISDEBUG",true);
    define("SERVER","localhost");
    define("USERNAME","root");
    define("PASSWORD","");
    define("DATABASE","php_b12_g");
    $db = null;
    try
    {	
        $db = new PDO("mysql:host=" . SERVER . ";dbname=" . DATABASE, USERNAME,PASSWORD);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        LogError($e);
    }
    function LogError(PDOException $e,$FileName='connection.php',$line=0)
    {
        $ErrorDateTime = date("D d-m-Y h:i:s A");
        $ErrorMessage = "\n Error Code " . $e->getCode() . " Error Detail "  . $e->errorInfo[2] . " on occured at $ErrorDateTime in file $FileName at line no $line";
        file_put_contents(FILENAME,$ErrorMessage,FILE_APPEND | LOCK_EX);
        if(ISDEBUG)
            echo $ErrorMessage;
        else 
            echo "oops, something went wrong, we are trying to findout the problem. please come after sometime";
        exit();
    }
?>