<?php

@include '../config.php';

//session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:index.php');
};

if(isset($_POST['aboutcontent_btn'])){

  
   $aboutcontent = mysqli_real_escape_string($conn, $_POST['aboutcontent']);


   mysqli_query($conn, "UPDATE `about` SET aboutcontent = '$aboutcontent' ") or die('query failed');


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update about</title>

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
</style>
</head>
<body>
   
<?php @include 'admin_headers.php'; ?>

<section class="update-product">

<?php

   //$update_id = $_GET['update_about'];
   $select_products = mysqli_query($conn, "SELECT * FROM `about` ") or die('query failed');
   // if(mysqli_num_rows($select_products) > 0){
   //   ($fetch_products = mysqli_fetch_assoc($select_products))
?>

<form action="" method="post" enctype="multipart/form-data">
  <img src="image/logo.jpg" alt="">
<h3>Updated Successfully</h3>
   <!-- <input type="text" class="box" value="" required name="aboutcontent"> -->
 <button type="submit" value="Go Back" name="update_about" class="option-btn"> <a href="about_update.php"> GO BACK</button></a>
</form>
<!-- <?php //echo $select_products['aboutcontent']; ?> -->
<?php
      
   // }else{
   //    echo '<p class="empty">no update product select</p>';
   // }
?>

</section>

<script src="js/admin_script.js"></script>

</body>
</html>