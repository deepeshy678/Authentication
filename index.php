<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - LogIn | Register</title>
    <link rel="stylesheet" href="newstyle.css">
</head>
<body>
            <h3>Fill The Form !</h3>
            <form method="POST" action="register.php">
                <input type="text" name="fullname" placeholder="Full Name"/>
                <input type="email" name="email" placeholder="E-mail"/>
                <input type="password" name="password" placeholder="Password"/>
                <button type="submit"  class="loginbtn" name="register">Register</button>
            </form>

            <?php
            $sql = "SELECT * FROM register";
            $newresult = mysqli_query($conn,$sql) or die("Query Unsuccessful");
            if(mysqli_num_rows($newresult)>0){

            
            ?>
            <table border="2px" cellpadding="50px" cellspacing="0">
                <thead>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Operations</th>
                </thead>
                <tbody>
                <?php 
                    while($row = mysqli_fetch_assoc($newresult)){
                    
                    ?>
                    <tr>
                        <td><?php  echo $row['FullName'];  ?></td>
                        <td><?php  echo $row['Email'];  ?></td>
                        <td>
                            <a href="update.php?id=<?php echo $row['FullName'];?>" class="extraoptf">UPDATE</a>
                            <a href="delete.php?id=<?php echo $row['FullName'];?>" class="extraopts">DELETE</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php } ?>
           
</body>
</html>