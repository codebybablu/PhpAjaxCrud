<!-- <form action="forgotpassword.php" method="post">
  <label for="email">Email:</label>
  <input type="email" id="email" name="email">
  <button type="submit">Send Reset Link</button>
</form>

<p>Back to Login <a href="index.php" class="text-decoration-none">Login here</a></p> -->

<form id="change-password-form">
		          <div class="contact-row">
		            <div class="name">Current Password</div>
		            <div class="txtfld-box">
		              <input type="password" id="current-password" name="current_password">
		            </div>
		            <div class="req-field"> This Field Required </div>
		          </div>
		          <div class="clear"></div>
		          <div class="contact-row">
		            <div class="name">New Password</div>
		            <div class="txtfld-box">
		              <input type="password" 
                  id="new-password" 
                  name="new_password">
		            </div>
		          </div>
		          <div class="clear"></div>
		          <div class="contact-row">
		            <div class="name">Confirm Password</div>
		            <div class="txtfld-box">
		              <input type="password" id="confirm-password" name="confirm_password">
		            </div>
		          </div>
		          
                  <input type="submit" class="btn" name="submit" value="Change Password">
		        
              </form>