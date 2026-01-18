<?php 
   require_once("database.php");
   $id=$_GET['id'];
   $result=mysqli_query($connection,"DELETE FROM login where id= $id");
   header("Location:display.php");
?>