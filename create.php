<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $First_name =$_POST['firstname'];
    $Last_name =$_POST['lastname'];
    $email =$_POST['email'];
    $Password =$_POST['pwd'];
    $Gender =$_POST['gender'];
    $sql ="INSERT INTO users(fname,lname,email,password,gender) VALUES
    ('$First_name','$Last_name','$email','$Password','$Gender')";
    $result=$conn->query($sql);
    echo "Fine";

if($result){
    echo 'New record created successfully';
    }else{
        echo 'Error:'.$sql.'<br>'.$conn->error;
        }
        $conn->close();
    }
        ?>
        <html>
        <a class="btn btn-info" href="signup.html"><br><br>Back</a>
        <a class="btn btn-info" href="read.php"><br><br>View record from Database</a>
        
</html>