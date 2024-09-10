<?php
include ('connect.php');

if(isset($_POST['displaySend']))
{
    $table = '<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Place</th>
        <th>Mobile</th>
        <th>Operation</th>
        
      </tr>
    </thead>
    ';

 $query = 'select * from users';
 $result = mysqli_query($conn,$query);
//  $rows = mysqli_num_rows($result);
// if($rows>0)
  //{
  $i=1;
     while($row = mysqli_fetch_assoc($result))   {
       $id = $row['id'];
       $name = $row['name'];
       $email = $row['email'];
       $place = $row['place'];
       $mobile = $row['mobile'];

       $table.='
       <tr>
      <td>'.$i.'</td>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$place.'</td>
      <td>'.$mobile.'</td>
      <td> <button class="btn btn-success" onclick="UserDetail('.$id.')">Update</button> &nbsp; 
           <button class="btn btn-danger" onclick="DeleteUser('.$id.')">Delete</button></td>
    </tr>';
    $i++;
     }
     $table.='</table>';
     echo $table;
 }
//  else
//  {
//     echo" no records";
//  }
// }



?>