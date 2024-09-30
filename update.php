<?php
include("connection.php");

if(isset($_GET['id'])){
    $user_id = $_GET['id'];

    $sql = "SELECT * FROM register WHERE FullName='$user_id'";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "No user found!";
        exit();
    }
}

// Check if the form is submitted
if(isset($_POST['update'])){
    // Get the updated data from the form
    $full_name = $_POST['fullname'];
    $email = $_POST['email'];

    // Update the user data in the database
    $sql = "UPDATE register SET FullName='$full_name', Email='$email' WHERE FullName='$user_id'";
    
    if(mysqli_query($conn, $sql)){
        // Redirect to the main page or show a success message
        echo "User updated successfully!";
        header("Location: index.php"); // You can change this to your home page
    } else {
        echo "Error updating user: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="newstyle.css">
</head>
<body>
    <h3>Update User Information</h3>
    <form method="POST" action="">
        <input type="text" name="fullname" value="<?php echo $row['FullName']; ?>" required/>
        <input type="email" name="email" value="<?php echo $row['Email']; ?>" required/>
        <button type="submit" name="update" class="updatebtn">Update</button>
    </form>
</body>
</html>
