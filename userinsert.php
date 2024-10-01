<?php

include('connect.php');

    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        // Check if user with same email already exists
        $check_sql = "SELECT * FROM userinfo WHERE email = '$email'";
        $check_query = mysqli_query($conn, $check_sql);
        if (mysqli_num_rows($check_query) > 0) {
            echo "Account with this email already exists";
        } else {
            // Hash and salt password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            
            $sql = "Insert into userinfo (name,email,password) values('$name','$email','$hashedPassword')";
            $query = mysqli_query($conn, $sql);
            if($query){
                header('location:index.php');
                exit;
                // echo "created account successfully";
            }else{
                echo "something errors";
            }
        }
    }
?>