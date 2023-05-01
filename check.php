<?php
$connect=mysqli_connect("localhost","root","","checkphp");
if($connect){
    echo "connected";
}
else{
    echo "Failed";
}
if(isset($_POST['submit'])){
    $First_name =$_POST['firstname'];
    $Last_name =$_POST['lastname'];
    $email =$_POST['email'];
   
    $Gender =$_POST['gender'];
    $sql ="INSERT INTO users(firstname,lastname,email,gender) VALUES
    ('$First_name','$Last_name','$email','$Gender')";
    $result=$connect->query($sql);

if($result == true){
    echo 'New record created successfully';
    }else{
        echo 'Error:'.$sql.'<br>'.$conn->error;
        }
        $connect->close();
    }
        ?>
        <html>
        <a class="btn btn-info" href="signup.html"><br><br>Back</a>
        <a class="btn btn-info" href="read.php"><br><br>View record from Database</a>
</html>