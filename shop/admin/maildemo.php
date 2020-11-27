<?php
    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    
    require_once("../inc/mail_function.php");
    date_default_timezone_set("asia/kolkata");
    $receiver = "theeasylearn@gmail.com";
    $subject = date("d-m-y h:i:s A");
    $message = "This is sample message body " . rand();
    $response = SendMail($receiver,$subject,$message);
    if($response==1)
        echo "Mail has been sent";
    else 
        echo "Mail has not been sent";
?>