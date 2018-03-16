<!DOCTYPE html>
<html>
    <head>
       <title>search Page</title>
    </head>
    <body>
        <?php include "header.php" ?> 
        <form action="" method="post">
           <h3>enter property name to search</h3>
           <input type="text" placeholder="enter search" name="search" id="search"  />
           <input type="submit" name="submit" value="search" />
        </form>
    </body>
</html>  
<?php
    include "connect.php";
    if(isset($_POST["submit"])){
        $search=$_POST['search'];
        $qry="SELECT * FROM `propertydetails` WHERE  `propertyname`='$search';";
        $sql=mysqli_query($conn,$qry)or die("Cannt find : ");
        if(mysqli_num_rows($sql)>0) {
            while($row=mysqli_fetch_assoc($sql)) { 
                $imagepath = "uploads/".$row['photo'];
                $features = $row['features'];
                $name = $row['propertyname'];
                $description =  $row['description'];
                $seller_name=$row['seller_name'];
                $seller_phone=$row['seller_phone'];
                echo "<br><br>";
                echo "<table>";
                echo "<tr>";
                echo "<td>";
                echo "<img src='$imagepath'>";
                echo "<br>";
                echo "<tr>";
                echo "<td>";
                echo "<b>Description:</b>";
                echo "<p>$description</p>";
                echo "<br>";
                echo "<b>Features:</b>";
                echo "<p>$features</p>";
                echo "<br>";
                echo "<b>Seller name: </b>";
                echo $seller_name;
                echo "<br><br>";
                echo "<b>Seller phone number: </b>";
                echo $seller_phone;
                echo "</td>";
                echo "</tr>";
                echo "</td>";
                echo "</tr>";
                echo "</table>";
       
            } 
         } 
         else { 
            echo "<h2>No property found with that name</h2>";
         }	
    }
?>