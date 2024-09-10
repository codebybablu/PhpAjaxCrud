<?php
include('connect.php');

if(isset($_POST['updateid'])){

    $id = $_POST['updateid'];

    $sql = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $response = array();
    while($row = mysqli_fetch_assoc($result)){
        $response = $row;
    }
    echo json_encode($response);
}else{
    $response['status']=200;
    $response['message']="Invalid or data not found.";
}

// update data

if(isset($_POST['hiddendata'])){
    $id = $_POST['hiddendata'];
    $name = $_POST['UpdateName'];
    $place = $_POST['UpdatePlace'];
    $mobile = $_POST['UpdateMobile'];

    $sql = "UPDATE users SET name='$name', place='$place', mobile='$mobile' WHERE id=$id";
    $result = mysqli_query($conn, $sql);
}

?>