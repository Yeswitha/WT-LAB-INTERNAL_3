<?php
    include "connect.php";
    session_start();
    if(isset($_POST["submit"])){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $pass=$_POST["password"];
        $qry="select * from `user` where `username`='$name' and `phnno`='$phone';";
        $res = mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
        if(mysqli_num_rows($res)>0)
         echo "YOU ALREADY REGISTER";
        else{
            $qry = "INSERT INTO `user` ( `username`, `email`, `password`,`phnno`) VALUES ('$name', '$email', '$pass','$phone')";
            mysqli_query($conn,$qry) or die("Connection failed: ");
            header('location:login.php');
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register Page </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="register.css" />
    <script src="register.js"></script>
</head>
<body>
    <h2>Register</h2>
    <form   action="" method="post" class="form">
    Username:
    <input  type="text" palceholder="enter username" name="name" id="name"/>
    <br><br>
    Email: 
    <input type="email" palceholder="enter email" name="email" id="email"/>
    <br><br>
    Phone No:
    <input type="text" palceholder="phone number" name="phone" id="phn"/>
    <br><br>
    Password:
    <input type="password" palceholder="enter password" name="password" id="pass"/>
    <br><br>
    <input type="submit" name="submit" />
    </form>
</body>
</html>