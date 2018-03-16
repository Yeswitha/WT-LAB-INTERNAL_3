<?php
    include "connect.php";
    session_start();
    if(isset($_POST["submit"])){
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $qry = "SELECT * FROM `user` WHERE  `email`='$email' AND `password`='$pass';";
        $sql = mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
        if(mysqli_num_rows($sql)>0) {
            $row=mysqli_fetch_assoc($sql);
            $_SESSION['userid']=$row['userid'];
            $_SESSION['user'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['phnno'] = $row['phnno'];
            header('location:home.php');
        } 
        else {
                echo "INvalid login";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
            <title>login</title>
            <link rel="stylesheet" href="login.css">
    </head>   
    <body>
        <h2>Login</h2>
        <form class="form" method="post" action="">
            Email: <input type="text" name="email">
            <br><br>
            Password: <input type="password" name="pass">
            <br><br>
            <input type="submit" name="submit" value="Login">
        </form>
    </body>  
</html>