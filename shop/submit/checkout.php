<?php 
    session_start();
    require('../../vendor/autoload.php');
    use Rakit\Validation\Validator;
    $validator = new Validator;
    $validation = $validator->validate($_POST, [
        'fullname'=> 'required|min:10',
        'phone'=> 'required|numeric|min:10|max:12',
        'address_1'=> 'required|min:10',
        'address_2'=> 'required|min:10',
        'zipcode'=> 'required|numeric|min:6|max:6',
        'city'=> 'required|min:3'
    ]);
    
    $validation->setMessages(
        [
            'required' =>':attribute is neccesary input',
            'min'=>':attribute minimum length is :min',
            'max'=>':attribute maximum length is :max',
            'numeric'=>':attribute only accept nummbers'
        ]);
        
    if ($validation->fails()) {
        // handling errors
        $errors = $validation->errors();
        $errors = $errors->firstOfAll();
        $_SESSION['errors'] = serialize($errors); 
        $validinput = $validation->getValidatedData();
        $_SESSION['inputs'] = serialize($validinput); 
        header("location:../checkout.php");
    } 
    else 
    {
           
    }
?>