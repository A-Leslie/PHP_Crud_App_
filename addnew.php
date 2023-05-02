<?php
include "connection.php" ;
if(isset($_POST['submit'])){
    $First_name =$_POST['first_name'];
    $Last_name =$_POST['last_name'];
    $email =$_POST['email'];
    $Gender =$_POST['gender'];
    $password=$_POST['password'];
    $hashed_password=password_hash($password,PASSWORD_DEFAULT);
    $sql ="INSERT INTO users(fname,lname,email,gender,password) VALUES
    ('$First_name','$Last_name','$email','$Gender','$password')";
    $result= mysqli_query($conn,$sql);


  if($result){
    header("location:index.php?msg=New record created successfully ");
    
  }
  else{
    echo" Failed: " . mysqli_error($conn); 
  }
echo "";
}


?>


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
        <div class="text-center mb-4">
            <h3>New Participant</h3>
            <p class="text-muted">Complete the form below to participate</p>
        </div>
    <div class="container d-flex justify-content-center">
        <form action="" method="POST" style="width:50vw; min-width:300px;" >
            <div class="row">
                <div class="col">
                    <label class="form-label">First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="John">
                </div>
                <div class="col">
                    <label class="form-label">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Doe">
                </div>
               
            </div>
             <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="johndoe@gmail.com">
                </div>
                <div class="col">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group mb-3">
                    <label>Gender:</label>&nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                    <label for="male" class="form-input-label">Male</label>
                    &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                    <label for="female" class="form-input-label">Female</label>

                </div>   
                <div>
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>
        </form>
    </div>
    </div>
</body>
</html>