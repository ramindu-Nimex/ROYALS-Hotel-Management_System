<?php
// delete
if(isset($_GET['delete'])) {
   $id = $_GET['delete'];
   $sql = "DELETE FROM users WHERE id = $id";
   mysqli_query($conn,$sql);
   header('location:user_view.php');
}
?>