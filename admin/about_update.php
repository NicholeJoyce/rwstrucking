<?php

@include '../config.php';


$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:index.php');
};

if(isset($_POST['aboutcontent'])){

//    $name = mysqli_real_escape_string($conn, $_POST['name']);

   $aboutcontent = mysqli_real_escape_string($conn, $_POST['aboutcontent']);

}
   $select_product_name = mysqli_query($conn, "SELECT aboutcontent FROM `about` ") or die('query failed');



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Update</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">
<style>
   body{
      background-image:linear-gradient(#A70D2A, #686A6C);
      background-repeat: no-repeat;
      background-position: center;
      height: 100vh;
   }
   .header {
        width: 100%;
        background-color: #333333;
    }
</style>
</head>
<body>
   
<?php @include 'admin_headers.php'; ?>

<section class="add-products" style="margin-top: 100px;">

   <form action="about_process.php" method="POST" enctype="multipart/form-data">
      <h3>Edit About Page</h3>
      <textarea name="aboutcontent" class="box" required placeholder="update about page" ></textarea>
      <input type="submit" value="Update About" name="aboutcontent_btn" class="btn">
   </form>
<!-- cols="30" rows="10" sa text area to -->
   
</section>



      <?php
        //  $select_products = mysqli_query($conn, "SELECT * FROM `about`") or die('query failed');
        //  if(mysqli_num_rows($select_products) > 0){
        //    ($fetch_products = mysqli_fetch_assoc($select_products))
      ?>
      <!-- <div class="box">
         <div class="price">$   echo $fetch_products['price']; ?>/-</div>  -->
         <!-- <img class="image" src="../uploaded_img/<?php //echo $fetch_products['image']; ?>" alt=""> -->
         <!-- <div class="name"><?php //echo $fetch_products['name']; ?></div>
         <div class="details"><?php //echo $fetch_products['details']; ?></div>
         <a href="admin_update_product.php?update=<?php //echo $fetch_products['id']; ?>" class="option-btn">update</a>
         <a href="about_update.php?delete=<?php //echo $fetch_products['aboutid']; ?>" class="delete-btn" onclick="return confirm('delete this product?');">delete</a> -->
      <!-- </div> -->
      <?php
    //      }
    //   else{
    //      echo '<p class="empty">this page is yet to be updated!</p>';
    //   }
      ?>
   <!-- </div> -->
   

<!-- </section>  -->












<script src="js/admin_script.js"></script>

</body>
</html>