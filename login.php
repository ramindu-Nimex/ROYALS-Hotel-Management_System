<?php
   session_start();
   include "config.php";

   if(isset($_POST['login'])) {
      $uname = $_POST['uname'];
      $password = md5($_POST['password']);

      $sql = "SELECT * FROM userproject WHERE uname = '$uname' AND password = '$password'";
      $result = mysqli_query($conn,$sql);
      
      if(mysqli_num_rows($result) > 0) {
         $row = mysqli_fetch_assoc($result);
         $_SESSION["uname"] = $uname;
         $_SESSION['user_ID'] = $row['id'];
         
         if ($row['account'] == 'admin') {
            header('Location: admin.php'); // Redirect to admin page
            exit();
         } else {
            header("Location: main.php"); // Redirect to customer page
            exit();
         }
      }
      else {
         $message[] = 'incorrect email or password!';
      }
   }
   $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
   <link rel="stylesheet" href="css/login.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
   <input type="checkbox" id="showhide">

   <div class="showbtn">
      <a href="#"><label for="showhide"><i class="fas fa-eye"></i></label></a>
      <a href="#"><label for="showhide"><i class="fas fa-eye-slash"></i></label></a>
   </div>

   <div class="login">
      <div class="logo"></div>
      <div class="title">ROYALS</div>
      <form action="" method="post" class="fields">
         <?php
            if(isset($message)) {
               foreach($message as $message) {
                  echo '<div class="message">'.$message.'</div>';
               }
            }
         ?>
         <div class="box">
            <i class="fas fa-user"></i><input type="text" class="uni" name="uname" placeholder="UserName">
         </div>

         <div class="box">
            <i class="fas fa-key"></i><input type="password" class="pwi" name="password" placeholder="Password">
         </div>

         <div class="forgot1">
            <a href="#">Forgot Password?</a>
         </div>
         
         <button name="login" class="sbtn">Login</button>
         <div class="forgot">
            Not yet a member ? <a href="./register.php">Sign Up</a>
         </div>
      </form>
   </div>
</body>
</html>