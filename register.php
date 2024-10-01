<?php
//include('connect.php');
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
<form method="POST" action="userinsert.php">
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
  <button type="submit" class="btn btn-primary" onclick="UpdateSignUp()">Signup</button>
  <p>Already have an account? <a href="index.php" class="text-decoration-none">Login here</a></p>
</form>

<!-- <div id="register-response"></div> -->

</div>
</div>