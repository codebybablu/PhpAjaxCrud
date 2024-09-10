<?php

include('connect.php');

if(isset($_POST['deletesend'])){
    $id = $_POST['deletesend'];

    $sql = "DELETE FROM users WHERE id=$id";
    $result = mysqli_query($conn,$sql);
 
}

?>