<?php
include("connection.php");
$userid = $_GET['id'];
$query = "DELETE FROM register WHERE FullName = '$userid'";
$result = mysqli_query($conn,$query);

if($result){
    echo "<script>alert('Deleted Successfully')</script>";
}
header('Location:http://localhost/authentication/index.php');
?>