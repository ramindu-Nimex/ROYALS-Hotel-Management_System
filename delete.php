<?php
   include "config.php";
// delete
if(isset($_GET['delete'])) {
   $id = $_GET['delete'];
   $sql = "DELETE FROM userproject WHERE id = $id";
   mysqli_query($conn,$sql);
   header('location:view.php');
}
?>