<!DOCTYPE html>
<html> 
   <head>
      <title>Home</title>
   </head>
   <body>
   <h1>PROPERTY SELLNG SS</h1>
    <div class="nav">
        <ul>
       
        <?php  if(!isset($_SESSION['email'])) {    ?>
            <li><a href="logout.php">Logout</a></li>
        <?php  } ?>
       
        </ul> 
    </div>  
      <h2>WELCOME!!!!!  :-) </h2>
      <h4>Want to sell  anything then click here ---> <a href="details.php">  enter property details</a></h4>
      <br><br>
      <h4>To find a product Use this ---><a href="search.php"> Search</a></h4>
   </body>
</html>
