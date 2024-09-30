<?php

include('connect.php');

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash and salt password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "Insert into userinfo (name,email,password) values('$name','$email','$hashedPassword')";
    $query = mysqli_query($conn, $sql);
    // if($query){
    //     echo "created account successfully";
    // }else{
    //     echo "something errors";
    // }
    }
//    include('connect.php');

    extract($_POST);

//    if(isset($_POST['nameSend']) && isset($_POST['emailSend']) && isset($_POST['sendPassword']) && isset($_POST['sendConfirmPassword'])){
//     $name = $_POST['nameSend'];
//     $email = $_POST['emailSend'];
//     $password = $_POST['sendPassword'];
//     $confirmPassword = $_POST['sendConfirmPassword'];
    
//     if ($password !== $confirmPassword) {
//         echo "Passwords do not match. Please try again.";
//         exit;
//     }
//     $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
//     $sql = "Insert into userinfo (name,email,password) values('$name','$email','$hashedPassword')";
//     $query = mysqli_query($conn, $sql);
//     }

?>