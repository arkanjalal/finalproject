<?php
@include 'connect.php';

$id = $_GET['id'];

 if(isset($_POST['submit'])){

   $name =  $_POST['name'];
   $email = $_POST['email'];
   $pass = $_POST['password'];
   $cpass = $_POST['cpassword'];
   $user_type = $_POST['user_type'];

   $select ="UPDATE `user_form` SET `id`=`$id`,`name`=`$name`,
   `email`=`$email`,
  `user_type`=`$user_type` WHERE id=$id"; 

   $result = mysqli_query($conn, $select);

   if(($result)){
      header('location:manageuser.php');
   }else{
         echo "Failed" .mysqli_error($conn);
 }
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
     rel="stylesheet"
     integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
     crossorigin="anonymous">
    <title> Updae </title>

    <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
</head>
<body>


<div class="form-container">

   <form action="" method="post">
      <h4>register now</h4>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="hidden" name="id" required  value="<?php echo $id?>" class="form-control"> <br>

      <input type="text" name="name" required  value="<?php echo $name?>"> 
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required  placeholder="enter your password">
      <input type="password" name="cpassword" required  placeholder=" confirm your password">
      <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" name="save" value=" Save" class="form-btn  text-center"><br>
     
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>

</div>


</body>
</html>