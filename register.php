<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Royals Hotel Management System Registration form</title>
   <link rel="stylesheet" href="./register.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
    crossorigin="anonymous">
</head>
<body>
   <div class="signup">
   <?php
   include "config.php";

   if(isset($_POST['submit'])) {
        $fullname = $_POST['fname'];
        $username = $_POST['uname'];
        $email = $_POST['email'];
        $password = $_POST['passw'];
        $repeatpassword = $_POST['repassw'];

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $errors = array();

        if(empty($fullname) OR empty($username) OR empty($email) OR empty($password) OR empty($repeatpassword)) {
            array_push($errors, "All fields are required");
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "E-mail is not valid");
        }

        if(strlen($password) < 8 ) {
            array_push($errors, "Password must be at least 8 character long");
        }

        if($password !== $repeatpassword) {
            array_push($errors, "Password does not match");
        }

        $sql = "SELECT * FROM user WHERE email = '$email'";
        $result2 = mysqli_query($conn,$sql);
        $rowCount = mysqli_num_rows($result2);

        if($rowCount > 0) {
            array_push($errors, "Email already exist");
        }

        if(count($errors) > 0) {
            foreach($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
         }
        }
        else {
            $sql = "INSERT INTO user(fullName, userName,email, password) VALUES ('$fullname','$username','$email','$password')";

            $result = mysqli_query($conn,$sql);

            if($result) {
                header('location:login.php');
            }
            else {
                die(mysqli_error($conn));
            }
        }
        $conn->close();
    }
    ?> 
        <h1>SIGN UP</h1>
        <h4>It's Free and only takes a minute</h4>
        <form action="" method="post">
            <div class="box">
                <i class="fas fa-user"></i><input type="text" class="uni" name="fname" placeholder="Full Name">
            </div>

            <div class="box">
                <i class="fas fa-user"></i><input type="text" class="uni" name="uname" placeholder="User Name">
            </div>

            <div class="box">
                <i class="fa-solid fa-envelope"></i><input type="email" class="uni" name="email" placeholder="E-mail">
            </div>

            <div class="box">
                <i class="fas fa-key"></i><input type="password" class="pwi" name="passw" placeholder="Password">
            </div>

            <div class="box">
                <i class="fas fa-key"></i><input type="password" class="pwi" name="repassw" placeholder="Re Enter Password">
            </div>

            <div class="check">
                <input type="checkbox"  id="checkBox" class="inputStyle" onclick="enableButton()"> Accept Privacy policy and Terms
            </div>

            <input type="submit" name="submit" value="Register" class="sbtn">  
            
            <div class="forgot">
                Already Register ? <a href="./login.php">Login Here</a>
            </div>
        </form>
   </div>
</body>
</html>