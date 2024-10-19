<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  <form id="change-password-form">

		            <div class="name">Current Password</div>
		              <input type="password" id="current-password" name="current_password">
		            <div class="req-field"> This Field Required </div>
		          
		            <div class="name">New Password</div>
		              <input type="password" 
                  id="new-password" 
                  name="new_password">
		          </div>
		            <div class="name">Confirm Password</div>
		              <input type="password" id="confirm-password" name="confirm_password">
		            </div>
		          
                <input type="submit" class="btn" name="submit" value="Change Password">
		          </form>

              <div id="response"></div>

<script>
$(document).ready(function() {
  $('#change-password-form').submit(function(event) {
    event.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
      type: 'POST',
      url: 'change-password-data.php',
      data: formData,
      success: function(response) {
        $('#response').html(response);
      }
    });
  });
});
</script>
</body>
</html>


<!-- <form action="forgotpassword.php" method="post">
  <label for="email">Email:</label>
  <input type="email" id="email" name="email">
  <button type="submit">Send Reset Link</button>
</form>

<p>Back to Login <a href="index.php" class="text-decoration-none">Login here</a></p> -->
