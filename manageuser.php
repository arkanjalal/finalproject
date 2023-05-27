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
            

  <title>Manage Users</title>
</head>
<body>
  
<nav class="navbar navbar-light justify-content-center fs-3 mb-5 "
  style="background-color: #00ff5573;">
    Manage Users
</nav>


<div class="container">
  
  <a href="Register_form.php" class="btn btn-primary my-5">Add user</a>

  <table class="table table-hover text-center">
  <thead class="table-primary">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">user_type</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
      <?php
      @include 'connect.php';

         $select="SELECT * FROM `user_form`";
         $result =mysqli_query($conn ,$select);
         while($row = mysqli_fetch_assoc($result)){

          ?>
    <tr>
      <td><?php echo $row['id']  ?></td>
      <td><?php echo $row['name']  ?></td>
      <td><?php echo $row['email']  ?></td>
      <td><?php echo $row['password'] ?></td>
      <td><?php echo $row['user_type'] ?></td>
        <td>
            <a href="edit.php?id=<?php echo $row['id']?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
            <a href="delete.php?id=<?php echo $row['id']?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
           <a href="changepass.php?id=<?php echo $row['id']?>" class="btn btn-primary"> change Password</a>
          </td>
    </tr>
          <?php
         }
      
          ?>
         

     
  </tbody>
 </table> 
</div>

  <!--Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
crossorigin="anonymous"></script>

</body>
</html>


