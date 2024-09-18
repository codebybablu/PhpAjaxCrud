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
<form>
  <div class="form-group">
    <label for="exampleInputName1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword2">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword3">Confirm Password</label>
    <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword3" placeholder="Confirm Password">
  </div>
  <button type="submit" class="btn btn-primary">Signup</button>
  <p>Already have an account? <a href="index.php" class="text-decoration-none">Login here</a></p>
</form>
    </div>
  </div>
</body>
</html>

<?php
include('connect.php');

// Get the user's input from the form
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Check if the passwords match
if ($password != $confirm_password) {
  echo "Passwords do not match.";
  exit;
}

// Hash the password
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// Insert the user into the database
$query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password_hash')";
mysqli_query($conn, $query);

// Check if the user was inserted successfully
if (mysqli_affected_rows($conn) > 0) {
  echo "User registered successfully.";
} else {
  echo "Error registering user.";
}

// Close the database connection
mysqli_close($conn);
?>