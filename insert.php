<?php
   include('connect.php');
   
   extract($_POST);

   if(isset($_POST['nameSend']) && isset($_POST['emailSend']) && isset($_POST['placeSend']) && isset($_POST['mobileSend']))
   {
    $query =  "insert into users(name,email,place,mobile) values('$nameSend','$emailSend','$placeSend','$mobileSend')";

     $result = mysqli_query($conn,$query);
   }

   mysqli_close($conn);
?>