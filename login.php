<?php
   session_start();
   include "config.php";

   if(isset($_POST['login'])) {
      // $usernameemail = $_POST['usernameemail'];
      $uname = $_POST['uname'];
      $password = $_POST['password'];

      $sql = "SELECT * FROM users WHERE uname = '$uname' AND password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);

      if(mysqli_num_rows($result) > 0) {
         // if($password == $row["password"]) {
            $_SESSION['loggedIn'] = true;
            $_SESSION["uname"] = $uname;
            $_SESSION['user_ID'] = $row['id'];

            if ($row['account'] == 'admin') {
               header('Location: admin.php'); // Redirect to admin page
               exit();
            } else {
               header("Location: main.php"); // Redirect to customer page
               exit();
            }
         // }
         // else {
         //    echo "<script> alert('wrong password'); </script>";
         // }
      }
      else {
         echo "<script> alert('Invalid username or password!!'); </script>";
      }
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Royals Hotel Management System Login form</title>
   <link rel="stylesheet" href="./login.css">
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
      <?php
         // include "config.php";
         // if(isset($_POST['login'])) {
         //    $email = $_POST['email'];
         //    $password = $_POST['passw'];

         //    $sql = "SELECT * FROM user WHERE email = '$email'";
         //    $result = mysqli_query($conn,$sql);
            // $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            // if($user) {
            //    if(password_verify($password, $user["password"])) {
            //       header('location:main.php');
            //       die();
            //    }
            //    else {
            //       echo "passsword not match";
            //    }
            // }
            // else {
            //    die(mysqli_error($conn));
            // }

         //    if($result) {
         //       header('location:main.php');
         //   }
         //   else {
         //       die(mysqli_error($conn));
         //   }
         // }
      ?>
      <div class="logo"></div>
      <div class="title">ROYALS</div>
      <form action="" method="post" class="fields">
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
         <!-- <input type="submit" name="login" value="Login" class="sbtn"> -->
         <div class="forgot">
            Not yet a member ? <a href="./register.php">Sign Up</a>
         </div>
      </form>
   </div> 
</body>
</html>