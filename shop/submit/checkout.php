<?php 
    session_start();
    require('../../vendor/autoload.php');
    use Rakit\Validation\Validator;
    $validator = new Validator;
    ///^[1-9][0-9]*$/ is regular expression which only allows numbers 
    $validation = $validator->validate($_POST, [
        'fullname'=> 'required|min:10',
        'phone'=> 'required|min:10|max:12|regex:/^[1-9][0-9]*$/',
        'address_1'=> 'required|min:10',
        'address_2'=> 'required|min:10',
        'zipcode'=> 'required|min:6|max:6|regex:/^[1-9][0-9]*$/',
        'city'=> 'required|min:3'
    ]);
    
    $validation->setMessages(
        [
            'fullname:required' =>':attribute is neccesary input',
            'fullname:min' =>':attribute must be at least 10 character long',
            'phone:required' =>':attribute is neccesary input',
            'phone:min'=>':attribute minimum length is 10',
            'phone:max'=>':attribute maximum length is 12',
            'phone:regex'=>':attribute only digits are allowed',
            'address_1:required' =>':attribute is neccesary input',
            'address_1:min' =>':attribute must be at least 10 character long',
            'address_2:required' =>':attribute is neccesary input',
            'address_2:min' =>':attribute must be at least 10 character long',
            'zipcode:required' =>':attribute is neccesary input',
            'zipcode:min' =>':attribute must be at least 6 character long',
            'zipcode:max' =>':attribute must be at least 6 character long',
            'city:required' =>':attribute is neccesary input',
            'city:min' =>':attribute must be at least 3 character long',
        ]);
    $validation->validate();
    
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