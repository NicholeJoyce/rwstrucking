<?php

@include '../config.php';

//session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:index.php');
};

if(isset($_POST['add_product'])){

   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folter = '../uploaded_img/'.$image;

   $select_product_name = mysqli_query($conn, "SELECT profilepic FROM `profile`") or die('query failed');

   if(isset($_POST['update_product'])){

    $update_p_id = $_POST['update_p_id'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    //$price = mysqli_real_escape_string($conn, $_POST['price']);
    $details = mysqli_real_escape_string($conn, $_POST['details']);
 
    mysqli_query($conn, "UPDATE `profile` SET profilepic = '$image'") or die('query failed');
 
    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folter = 'uploaded_img/'.$image;
    $old_image = $_POST['update_p_image'];
   }
    if(!empty($image)){
       if($image_size > 2000000){
          $message[] = 'image file size is too large!';
       }else{
          mysqli_query($conn, "UPDATE `profile` SET profilepic = '$image'") or die('query failed');
          move_uploaded_file($image_tmp_name, $image_folter);
       // unlink('uploaded_img/'.$old_image);
          $message[] = 'image updated successfully!';
       }
    }

 
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">
<style>
   body{
      background-image:linear-gradient(#A70D2A, #686A6C);
      background-repeat: no-repeat;
      background-position: center;
      
      /* height: 100vh; */
   }
   .header {
        width: 100%;
        background-color: #333333;
    }
    .box-container-profile{
        width: auto;    
    }
 

</style>
</head>
<body >
   
<?php @include 'admin_headers.php'; ?>

<section class="add-products" style="margin-top: 100px;">
   <form action="" method="POST" enctype="multipart/form-data">
      <h3>Update Profile Picture</h3>
      <input type="file" accept="image/jpg, image/jpeg, image/png" required class="box" name="image">
      <input type="submit" value="Update Profile" name="add_product" class="btn">
   </form>
</section>

<section class="show-profile">

   <center><div class="box-container-pic">

      <?php
         $select_products = mysqli_query($conn, "SELECT * FROM `profile`") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
      <div class="box"> 
         <img class="image" src="../uploaded_img/<?php echo $fetch_products['profilepic']?>">
      </div>
      <?php
         }
      }else{
         echo '<p class="empty">no profile added yet!</p>';
      }
      ?>
   </div></center>
   

 </section>

<script src="js/admin_script.js">


</script>

</body>
</html>