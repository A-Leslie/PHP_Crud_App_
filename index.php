

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD APP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:dodgerblue;">Participate in Tour</nav>
    <div class="container">
        <?php
        if(isset($_GET['msg'])){
            $msg=$_GET['msg'];
            echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
           '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>
         <a href="addnew.php"class="btn btn-dark mb-3"> Add New</a>
   
    <table class=" table table-hover text-center">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  include "connection.php";
  $sql="SELECT * FROM `users`";
  $result = mysqli_query($conn,$sql);
  while($row = mysqli_fetch_assoc($result)){
     
  
   ?>

    <tr>
      <td> <?php echo $row['id'] ?></td>
      <td> <?php echo $row['fname'] ?></td>
      <td ><?php echo $row['lname'] ?></td>
      <td> <?php echo $row['email'] ?></td>
      <td ><?php echo $row['gender'] ?></td>
      <td>
    <a href="edit.php?id=<?php echo $row['id']?>"class="link-dark"><i class="fa-solid fa-pen-to-square fs-5" me-3></i></a>
    <a href="delete.php?id=<?php echo $row['id']?>"class="link-dark"><i class="fa-solid fa-trash fs-5" me-3></i></a>
      </td>
    </tr>
    <?php
}
    ?>
    
  </tbody>
</table>
</div>
</body>
</html>