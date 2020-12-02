<?php 
    session_start();
    require('../../vendor/autoload.php');
    use Rakit\Validation\Validator;
    $validator = new Validator;
    $validation = $validator->validate($_POST, [
        'email'=> 'required|email',
        'password'=> 'required|min:10'
    ]);
    
    if ($validation->fails()==true) {
        // handling errors
        $errors = $validation->errors();
        $login_errors = $errors->firstOfAll();
        $_SESSION['login_errors'] = serialize($login_errors); 
        $validinput = $validation->getValidatedData();
        $_SESSION['login_inputs'] = serialize($validinput); 
        header("location:../login_register.php");
    } 
    else 
    {
        
    }
?>