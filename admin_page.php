<?php
include "config.php";

if(isset($_POST['add_Product'])) {
   $product_Name = $_POST['product_Name'];
   $product_Price = $_POST['product_Price'];
   $product_Image = $_FILES['product_Image']['name'];
   $product_Image_tmp_name = $_FILES['product_Image']['tmp_name'];
   $product_Image_folder = 'p_images/'.$product_Image;

   if(empty($product_Name) || empty($product_Price) || empty($product_Image)) {
      $message[] = 'Please Fill Out All';
   }
   else {
      $sql = "INSERT INTO product(name,price,image) VALUES('$product_Name','$product_Price','$product_Image')";
      $result = mysqli_query($conn,$sql);

      if($result) {
         move_uploaded_file($product_Image_tmp_name, $product_Image_folder);
         $message[] = 'New Product Add Successfully';
      }
      else {
         $message[] = 'Could not add the Product';
      }
   }
};

// delete
if(isset($_GET['delete'])) {
   $id = $_GET['delete'];
   $sql = "DELETE FROM product WHERE id = $id";
   mysqli_query($conn,$sql);
   header('location:admin_page.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Page</title>
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
      <div class="admin-product-form-container">
         <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <h3>Add a New Product</h3>
            <input type="text" placeholder="Enter Product Name" name="product_Name" class="box">
            <input type="number" placeholder="Enter Product Price" name="product_Price" class="box">
            <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_Image" class="box">
            <input type="submit" value="Add Product" name="add_Product" class="btn">
         </form>
      </div>

      <?php
         include "config.php";

         $sql = "SELECT * FROM product";
         $result = mysqli_query($conn,$sql);
      ?>

      <div class="product-display">
         <table class="product-display-table">
            <thead>
               <tr>
                  <th>Product Image</th>
                  <th>Product Name</th>
                  <th>Product Price</th>
                  <th colspan="2">Action</th>
               </tr>
            </thead>

            <?php
               include "config.php";
               while($row = mysqli_fetch_assoc($result)) {
                  ?>
                     <tr>
                        <td><img src="./p_images/<?php echo $row['image']; ?>" alt="" height="100"></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td>
                           <a href="./admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fa-regular fa-pen-to-square"></i> Edit</a>
                           <a href="./admin_page.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fa-solid fa-trash"></i> Delete</a>
                        </td>
                     </tr>
                  <?php
               }
            ?>
         </table>
      </div>

   </div>
</body>
</html>