<?php
   include "config.php";
   session_start();
   $UserID = $_SESSION['id'];
   $uname = $_SESSION["uname"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Profile View</title>
   <link rel="stylesheet" href="./user_view.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
   <div class="view">
      <div class="name">
         <h1>Welcome, <?php echo $_SESSION['uname']; ?></h1>
      </div>
      <form action="">
         <?php
            include "config.php";
            $sql = "SELECT * FROM users WHERE uname = '$uname'";
            $result = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_assoc($result)) {
               ?>
                  <ul>
                     <li><?php echo $row["id"]; ?></li>
                     <li><?php echo $row["fname"]; ?></li>
                     <li><?php echo $row["uname"]; ?></li>
                     <li><?php echo $row["email"]; ?></li>
                     <li class="buttons">
                        <a href="update_profile.php?edit=<?php echo $row['id']; ?>" class="btn1"> <i class="fa-regular fa-pen-to-square"></i> Edit</a>
                     </li>
                     <li class="buttons">
                        <a href="delete_profile.php?delete=<?php echo $row['id']; ?>" class="btn2"> <i class="fa-solid fa-trash"></i> Delete</a>
                     </li>
                  </ul>
               <?php
            }
         ?>
      </form>
   </div>
</body>
</html>