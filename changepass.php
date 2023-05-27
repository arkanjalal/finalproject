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

    <!--font-awesome-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
  </head>

  <body>
  <?php
  @include 'connect.php';
      if(isset($_POST['re-password'])){

        $old_pass =$_POST['old_pass'];
        $new_pass=$_POST['new_pass'];
        $re_pass=$_POST['re_pass'];
        $select="SELECT * FROM user_form WHERE id='1'";
        $result=mysqli_query($conn ,$select);
        $chg_pwd1= mysqli_fetch_array($result);
        $data_pwd=$chg_pwd1['password'];
        if($data_pwd ==$old_pass){
        if($new_pass== $re_pass){
       $up_pwd ="UPDATE user_form SET password='$new_pass'  WHERE id= '1'";
       $res=mysqli_query($conn ,$up_pwd);
       ?>
    echo"<script>alert('your password worng');</script>;
<?php
        }}

else{

    ?>
<script>alert('you are changing your password');</script>;
<?php
}}


?>
<!-- 

else{
    echo"<script>alert('your new and retype password is not match')</script> ;
        }
     ?> -->

  <nav class="navbar navbar-light justify-content-center fs-3 mb-5 "
  style="background-color: #00ff5573;">
    Manage Users
</nav>

<div class="card ">            
    <div class="card-header">
        <h3>Change password </h3>
     </div>
     <div class="card-body ">

   <div style="width:600px; margin:0px auto">
    <form action="" method="POST">
  
<div class="form-group">
     <label >Old Password</label>
     <input type="password"
     name="old_pass" 
     value="" required
     class="form-control">
    </div>

     <div class="form-group">
     <label >New Password</label>
     <input type="password"
     name="new_pass" 
     value="" required
     class="form-control">
    </div>

    <div class="form-group">
    <label>Confirm Password</label>
    <input type="password"
    name="re_pass" 
    value="" required
    class="form-control">
    </div>

    
    <div class="form-group">
       <button type="submit" name="re-password"
        class="btn btn-success w-100">Change password</button>
    </div>

          </form>
        </div>
      </div>
    </div>  
  </body>
 </html>