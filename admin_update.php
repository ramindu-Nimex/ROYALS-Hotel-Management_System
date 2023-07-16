<?php
include "config.php";


   $id = $_GET['edit'];

if(isset($_POST['update_Product'])) {
   $product_Name = $_POST['product_Name'];
   $product_Price = $_POST['product_Price'];
   $product_Image = $_FILES['product_Image']['name'];
   $product_Image_tmp_name = $_FILES['product_Image']['tmp_name'];
   $product_Image_folder = 'p_images/'.$product_Image;

   if(empty($product_Name) || empty($product_Price) || empty($product_Image)) {
      $message[] = 'Please Fill Out All';
   }
   else {
      $sql = "UPDATE product SET name = '$product_Name', price = '$product_Price', image = '$product_Image' WHERE id = '$id'";
      $result = mysqli_query($conn,$sql);

      if($result) {
         move_uploaded_file($product_Image_tmp_name, $product_Image_folder);
         header('location:admin_page.php');
      }
      else {
         $message[] = 'Could not update the Product';
      }
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Update</title>
   <link rel="stylesheet" href="css/admin_page.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
   <?php
      if(isset($message)) {
         foreach($message as $message) {
            echo '<span class="message">'.$message.'</span>';
         }
      }
   ?>

   <div class="container">
      <div class="admin-product-form-container centered">

      <?php
         include "config.php";
         $id = $_GET['edit'];
         $sql = "SELECT * FROM product WHERE id=$id";
         $result = mysqli_query($conn,$sql);
         $row = mysqli_fetch_assoc($result);

      ?>
         <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <h3>Update the Product</h3>
            <input type="text" placeholder="Enter Product Name" name="product_Name" class="box" value='<?php echo $row['name']; ?>'>
            <input type="number" placeholder="Enter Product Price" name="product_Price" class="box" value='<?php echo $row['price']; ?>'>
            <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_Image" class="box" value='<?php echo $row['image']; ?>'>
            <input type="submit" value="Update Product" name="update_Product" class="btn">
            <a href="./admin_page.php" class="btn">Go Back</a>
         </form>
      </div>
   </div>
</body>
</html>