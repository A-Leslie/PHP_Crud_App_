<?php
    include 'connection.php';
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=($_POST['password']);
        $sql="SELECT *FROM users WHERE `email`='$email'";
        $result=$conn->query($sql);
        if($result){
        $user_info=mysqli_fetch_assoc($result);
 if ($user_info['email']===$email && $user_info['password']===$password){
    session_start();
$_SESSION['email']=$email;
$_SESSION['password']=$password;

header('location:index.php?id:33');
 }
 else{
    header('Location:login.php?msg=Invalid email or password');
 }
    }else{
echo "Invalid data";
    } 

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
            <h3>Login</h3>
            <p class="text-muted">Login to edit</p>
        </div>
    <div class="container d-flex justify-content-center">
        <form action="" method="POST" style="width:50vw; min-width:300px;" >
            </div>
             <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="johndoe@gmail.com">
                </div>
                <div class="col">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
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