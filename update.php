<?php
   session_start();
   include "config.php";
   $id = $_GET['edit'];
   $UserID = $_SESSION['user_ID'];

   // if(!empty($UserID)) {
   //  header("Location: main.php");
   // }

   if(isset($_POST['update'])) {
        $name = $_POST['name'];
        $uname = $_POST['uname'];
        $email = $_POST['email'];

        $errors = array();

        if(empty($name) OR empty($uname) OR empty($email)) {
            array_push($errors, "All fields are required");
        }

        if(count($errors) > 0) {
            foreach($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
         }
        }
        else {
            $sql = "UPDATE userproject SET name = '$name', uname = '$uname', email = '$email' WHERE id = '$UserID'";

            $result = mysqli_query($conn,$sql);

            if($result) {
                header('location:view.php');
            }
            else {
                die(mysqli_error($conn));
            }
        }
        $conn->close();
    }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update Profile</title>
   <link rel="stylesheet" href="css/update.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
    crossorigin="anonymous">
</head>
<body>
   <div class="update">
        <h1>Update the Profile</h1>
        <form action="" method="post">
        <?php
         include "config.php";
         $id = $_GET['edit'];
         $sql = "SELECT * FROM userproject WHERE id=$UserID";
         $result = mysqli_query($conn,$sql);
         $row = mysqli_fetch_assoc($result);

         ?>
            <div class="box">
                <i class="fas fa-user"></i><input type="text" class="uni" name="name" value='<?php echo $row['name']; ?>'>
            </div>

            <div class="box">
                <i class="fas fa-user"></i><input type="text" class="uni" name="uname" value='<?php echo $row['uname']; ?>'>
            </div>

            <div class="box">
                <i class="fa-solid fa-envelope"></i><input type="email" class="uni" name="email" value='<?php echo $row['email']; ?>'>
            </div>

            <input type="submit" name="update" value="Update" class="sbtn">  
        </form>
   </div>
</body>
</html>