<?php
include("connection.php");
if(isset($_POST['register'])){
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO register(FullName,Email,Password)VALUES('$fullname','$email','$password')";
$result = mysqli_query($conn,$query);
if($result){
    echo "<script>alert('Registration Successful');</script>";
}
}
header('Location:http://localhost/authentication/index.php');
?>