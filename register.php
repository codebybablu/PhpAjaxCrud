<?php
session_start();
include('connect.php');

if (isset($_POST['submit'])) {
    // Get form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "Passwords do not match";
        exit;
    }

    // Check if user with the same email already exists
    $check_sql = "SELECT * FROM userinfo WHERE email = '$email'";
    $check_query = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($check_query) > 0) {
        echo "An account with this email already exists";
    } else {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert new user into the database
        $sql = "INSERT INTO userinfo (name, email, password) VALUES ('$name', '$email', '$hashedPassword')";
        $query = mysqli_query($conn, $sql);

        if ($query) {
          $_SESSION['success'] = 'Account created successfully';
          // echo "<script>alert('Account created successfully');</script>";
            header('Location: index.php'); // Redirect to login page after successful signup
            exit;
        } else {
            echo "An error occurred while creating the account";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
  <title>Document</title>
</head>
<body>
<div class="container mt-4">
<div class="row">
<form method="POST">
  <div class="form-group">
    <label for="exampleInputName1">Name</label>
    <input type="text" name="name" id="AddName" class="form-control" id="exampleInputName1" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">Email address</label>
    <input type="email" name="email" id="AddEmail" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword2">Password</label>
    <input type="password" name="password" id="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword3">Confirm Password</label>
    <input type="password" name="confirm_password" id="confirm_password" class="form-control" id="exampleInputPassword3" placeholder="Confirm Password">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Signup</button>
  <p>Already have an account? <a href="index.php" class="text-decoration-none">Login here</a></p>
</form>

</div>
</div>