<?php
 $server   = "localhost";
 $user     = "root";
 $password = "";
 $database = "crudweproject";

 $conn = new mysqli($server,$user,$password,$database);

 if(!$conn)
 {
    die(mysqli_error($conn));
 }

//  mysqli_close($conn);
?>