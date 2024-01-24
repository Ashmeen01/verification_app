<?php
@session_start();
$errors = array();

if(isset($_POST['submit_btn'])){
    $fullname = $_POST['fullName'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phoneNumber'];
    $businessname = $_POST['businessName'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirmPassword'];

if(empty($fullname)){
    array_push($errors, "Full Name required");
}

if(empty($email)){
    array_push($errors, "Email required");
}

if(empty($phonenumber)){
    array_push($errors, "Phone Number required");
}

if(empty($businessname)){
    array_push($errors, "Business Name required");
}

if(empty($address)){
    array_push($errors, "Address required");
}

if(empty($password)){
    array_push($errors, "password require");
}

if($confirm_password!=$password){
    array_push($errors, "Password Mismatch");
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    array_push($errors, "Please, enter a valid email address");
}

$sql = "SELECT * FROM `users` WHERE `email`=?";

}

