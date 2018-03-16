<?php 
     include "connect.php";
     session_start();

    if(isset($_POST['submit'])) {
        echo "bvg";
       $rname = $_POST['name'];
       $description = $_POST['description'];    
       $features = $_POST['features'];
       $user_id=$_SESSION['userid'];
       $username=$_SESSION['user'];
       $phone=$_SESSION['phnno'];
       $uploadOk = 0;
       if(isset($_FILES['photo'])){
           echo "hihi";
           $errors= array();
           $file_name = $_FILES['photo']['name'];
           $file_size = $_FILES['photo']['size'];
           $file_tmp = $_FILES['photo']['tmp_name'];
           $file_type = $_FILES['photo']['type'];
           $tmp = explode('.', $file_name);
           $file_ext=strtolower(end($tmp));
        
           $expensions= array("jpeg","jpg","png", "gif");
           if(in_array($file_ext,$expensions)=== false){
               array_push($errors, "extension not allowed, please choose a JPEG or PNG file.");
           }
        
           if($file_size > 50000000) {
              array_push($errors, "File size must be excately 50 KB.");
           }
        
           if(empty($errors)==true) {
               move_uploaded_file($file_tmp,"uploads/".$file_name) or die("error moving file");
               $uploadOk = 1;
            }else{
              print_r($errors);
            }
     
            if ($uploadOk == 1) {
                $qry = "INSERT INTO `propertydetails` (`propertyname`, `user_id`, `description`, `features`, `seller_name`,`seller_phone`,`photo`) VALUES ('$rname', '$user_id', '$description', '$features', '$username', '$phone','$file_name');";
                mysqli_query($conn,$qry)  or die("connection failed");
                header('location:home.php');
            }
        }
    }
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Description</title>
   </head>
   <body>
       <?php include "header1.php" ?>   
       <h2> Property Details</h2>
       
       <form action="" method="post" enctype="multipart/form-data">
          Property Name:
          <input type="text" placeholder="enter name" name="name"/>
          <br><br>
          Property Description: 
          <textarea name="description" ></textarea>
          <br><br>
          Features: 
          <textarea name="features" ></textarea>
          <br><br>
          Photo:
          <input type="file" name="photo" id="photo"/>
          <br><br>
          <input type="submit" name="submit" id="submit"/>
       </form> 
   </body>
</html>