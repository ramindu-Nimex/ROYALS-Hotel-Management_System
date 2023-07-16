<?php
   include 'config.php';

   if(isset($_POST['signup'])) {

      $name = $_POST['name'];
      $uname = $_POST['uname'];
      $email = $_POST['email'];
      $password = md5($_POST['password']);
      $repassword = md5($_POST['repassword']);

      $select = mysqli_query($conn, "SELECT * FROM userproject WHERE email = '$email' AND password = '$password'") or die('query failed');

      if(mysqli_num_rows($select) > 0){
         $message[] = 'user already exist'; 
      }
      if(empty($name) || empty($uname) || empty($email) || empty($password)) {
         $message[] = 'Please Fill Out All';
      }
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $message[] = 'E-mail is not valid';
      }
      if(strlen($password) < 4 ) {
         $message[] = 'Password must be at least 4 character long';
      }

      $sql = "SELECT * FROM userproject WHERE email = '$email'";
      $result2 = mysqli_query($conn,$sql);
      $rowCount = mysqli_num_rows($result2);

      if($rowCount > 0) {
         $message[] = 'Email already exist';
      }
      else {
         if($password != $repassword) {
            $message[] = 'confirm password not matched!';
         }
         else {
            $sql = "INSERT INTO userproject(name,uname,email,password) VALUES ('$name','$uname','$email','$password')";
            $result = mysqli_query($conn,$sql);

            if($result) {
               $message[] = 'registered successfully!';
               header('location:login.php');
            }
            else {
               $message[] = 'registeration failed!';
            }
         }
      }
   }
   $conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>
   <link rel="stylesheet" href="css/register.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
   <div class="signup">
      <h1>REGISTER NOW</h1>
      <form action="" method="post">
         <?php
            if(isset($message)) {
               foreach($message as $message) {
                  echo '<div class="message">'.$message.'</div>';
               }
            }
         ?>

         <div class="box">
            <i class="fas fa-user"></i><input type="text" class="uni" name="name" placeholder="Full Name">
         </div>

         <div class="box">
            <i class="fas fa-user"></i><input type="text" class="uni" name="uname" placeholder="User Name">
         </div>

         <div class="box">
            <i class="fa-solid fa-envelope"></i><input type="email" class="uni" name="email" placeholder="E-mail">
         </div>

         <div class="box">
            <i class="fas fa-key"></i><input type="password" class="pwi" name="password" placeholder="Password">
         </div>

         <div class="box">
            <i class="fas fa-key"></i><input type="password" class="pwi" name="repassword" placeholder="Re Enter Password">
         </div>

         <div class="check">
                <input type="checkbox"  id="checkBox" class="inputStyle" onclick="enableButton()"> Accept Privacy policy and Terms
         </div>

         <input type="submit" name="signup" value="Register" class="sbtn">

         <div class="forgot">
                Already Register ? <a href="./login.php">Login Here</a>
         </div>
      </form>
   </div>
</body>
</html>