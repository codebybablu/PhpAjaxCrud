<?php
session_start();
include "connect.php";

      if (isset($_POST['submit'])) {

        $email = $_POST['email'];
        $pass = $_POST['password'];
        $sql = "select * from userinfo where email='$email'";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($res);
        if (mysqli_num_rows($res) > 0) {
          if($password = $row['password']){
            // $_SESSION['login'] = true;
            // $_SESSION['id'] = $row['id'];
             // using session to print the username 
           $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];
           
           // header("location: display.php");
           header("location: form.php");
            
          }else{
           echo "Invalid credencials"; 
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
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Remember me</label>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Login</button>
      <p>Don't have an account? <a href="register.php" class="text-decoration-none">Register here</a></p>
      <!-- <p>Forget password? <a href="" class="text-decoration-none">Reset password</a></p> -->
    </form>
  </div>
</div>
</body>
</html>