<?php
session_start();

include('connect.php'); 

$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];

$query = "SELECT * FROM userinfo WHERE email = '".$_SESSION['email']."'";
// query
$result = mysqli_query($conn, $query);

$user = mysqli_fetch_assoc($result);

// for password verification
if (password_verify($current_password, $user['password'])) {
  echo "Current password is incorrect.";
  exit;
}

// new passord not confirm
if ($new_password != $confirm_password) {
  echo "New password and confirm password do not match.";
  exit;
}

// new password hash
$new_password_hash = password_hash($new_password, PASSWORD_DEFAULT);

$query = "UPDATE userinfo SET password = '".$new_password_hash."' WHERE email = '".$_SESSION['email']."'";
mysqli_query($conn, $query);
echo "<br>";
echo "Password changed successfully.";

?>

