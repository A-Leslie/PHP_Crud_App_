<?php
include "connection.php";
$id = $_GET['id'];
$sql="DELETE FROM `users` WHERE id = $id";
$result=mysqli_query($conn,$sql);
if($result){
    header("Location:les.php?msg=Record deleted successfully");
}
else{
        echo "Failed" . mysqli_error($conn);
    }
?>