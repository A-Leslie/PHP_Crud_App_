<?php
$servername="localhost";
$db_name="student_dbphp";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password,$db_name);
if(!$conn){
    die("connection failed".mysqli_connect_error());
}
else{
// echo "Connected Successfully";
}
?>