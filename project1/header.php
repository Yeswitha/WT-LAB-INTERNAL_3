<!DOCTYPE html>
<html>
<h1>PROPERTY SELLNG SS</h1>
<div class="nav">
    <ul>
    <li><a href="home.php">Home</a></li>
    <?php  if(!isset($_SESSION['email'])) {    ?>
       <li><a href="logout.php">Logout</a></li>
        <?php  } ?>
       
    </ul> 
</div>
</html>