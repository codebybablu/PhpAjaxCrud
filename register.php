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

<?php
 include('connect.php');
 
 if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password'])) {
        include('userinsert.php');
  }
 
 ?>

  <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
</body>
</html>


<script>

// $(document).ready(function() {
//             $('#UserReg').submit(function(event) {
//                 event.preventDefault();
//                 var name = $('#name').val();
//                 var email = $('#email').val();
//                 var password = $('#password').val();
//                 var confirmPassword = $('#confirm_password').val();

//                 if (password !== confirmPassword) {
//                     $('#register-response').html('Passwords do not match. Please try again.');
//                     return;
//                 }
                // if(!name == '' && !email == '' && !password == '' && !confirmPassword == '') {
                  // $.ajax({
                  //     type: 'POST',
                  //     url: 'userinsert.php',
                  //     data: {
                  //         name: name,
                  //         email: email,
                  //         password: password
                  //     },
                  //     success: function(response) {
                  //         $('#register-response').html(response);
                  //     }
                  // });
                // }else{
                //   alert("required all fields");
                // }

        //     });
        // });

// function UpdateSignUp()
// {
//   var addName =  $('#AddName').val()
//   var addEmail =  $('#AddEmail').val()
//   var addpassword =  $('#password').val()
//   var addconfirmpassword =  $('#confirm_password').val()
//   if(!addName == '' && !addEmail == '' && !addpassword == '' && !addconfirmpassword == ''){
//     if (addpassword === addconfirmpassword) {
//       $.ajax({
//       url:"userinsert.php",
//       type:"POST",
//       data:{
//         nameSend:addName,
//         emailSend:addEmail,
//         sendPassword:addpassword,
//         sendConfirmPassword:addconfirmpassword
//       },
//       success:function(data,status){
//         console.log(data.success);
//         alert("Account created successfully")
//         $('#UserReg')[0].reset();
//       }
      
//   });

//   }else{
//     alert("Passwords do not match. Please try again.");
//   }
//   }else{
//     alert("All fields are required!");
//   }

// }
</script>