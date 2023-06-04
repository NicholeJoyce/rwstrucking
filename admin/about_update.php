<?php

@include '../config.php';


$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
   header('location:index.php');
};

if (isset($_POST['aboutcontent'])) {

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
      body {
         background-image: linear-gradient(#A70D2A, #686A6C);
         background-repeat: no-repeat;
         background-position: center;
         height: 100vh;
      }

      .header {
         width: 100%;
         background-color: #333333;
      }

      .box-container-about {
         color: var(--black);
         text-align: justify;
         box-shadow: var(--box-shadow);
         border-radius: 2rem;
         padding: 39px;
         background-color: var(--black);
         color: var(--light-color);
         border: 1rem solid var(--black);
         margin-top: 2rem;
         font-size: 23px;
      }
   </style>
</head>

<body>

   <?php @include 'admin_headers.php'; ?>

   <section class="add-products" style="margin-top: 100px;">

      <form action="about_process.php" method="POST" enctype="multipart/form-data">
         <h3>Edit About Page</h3>
         <textarea name="aboutcontent" class="box" required placeholder="update about page"></textarea>
         <input type="submit" value="Update About" name="aboutcontent_btn" class="btn">
      </form>
      <!-- cols="30" rows="10" sa text area to -->
   </section>
   <!-- </section>  -->
   <section class="show-products">
      <center>
         <h1 style="font-size: 35px; color: #333333;">Updated About Content</h1>
      </center>

      <center>
         <div class="box-container-about">

            <?php
            $select_products = mysqli_query($conn, "SELECT * FROM `about`") or die('query failed');
            if (mysqli_num_rows($select_products) > 0) {
               while ($fetch_products = mysqli_fetch_assoc($select_products)) {
            ?>
                  <div class="box">
                     <div class="details"><?php echo $fetch_products['aboutcontent']; ?></div>
                  </div>
            <?php
               }
            } else {
               echo '<p class="empty">This page is yet to be updated by the admin!</p>';
            }
            ?>
         </div>
      </center>
   </section>
   <script src="js/admin_script.js"></script>

</body>

</html>