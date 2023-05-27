<?php

@include 'connect.php';
$id = $_GET[ 'id'];
$select = "DELETE FROM `user_form` WHERE id=$id" ;
$result = mysqli_query($conn, $select);

if(($result)){
    header('location:manageuser.php');
 }else{
       echo "Failed" .mysqli_error($conn);
}
?>