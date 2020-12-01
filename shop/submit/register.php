<?php 
    session_start();
    require('../../vendor/autoload.php');
    use Rakit\Validation\Validator;
    $validator = new Validator;
    $validation = $validator->validate($_POST, [
        'email'=> 'required|email',
        'password'=> 'required|min:10|max:32',
        'confirm_password'=> 'required|min:10|max:32|same:password',
        'mobile'=> 'required|numeric'
    ]);
    
    if ($validation->fails()) {
        // handling errors
        $errors = $validation->errors();
        $register_errors = $errors->firstOfAll();
        $_SESSION['register_errors'] = serialize($register_errors); 
        $validinput = $validation->getValidatedData();
        $_SESSION['register_inputs'] = serialize($validinput); 
        header("location:../login_register.php");
    } 
    else 
    {
        
    }
?>