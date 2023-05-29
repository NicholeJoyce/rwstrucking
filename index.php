<?php

include 'config.php';

//session_start();

//$user_id = $_SESSION['user_id'];
// if (!isset($user_id)) {
//    header('location:login.php');
// }

if (isset($_POST['add_to_wishlist'])) {

   $product_id = $_POST['product_id'];
   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];

   $check_wishlist_numbers = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if (mysqli_num_rows($check_wishlist_numbers) > 0) {
      $message[] = 'already added to wishlist';
   } elseif (mysqli_num_rows($check_cart_numbers) > 0) {
      $message[] = 'already added to cart';
   } else {
      mysqli_query($conn, "INSERT INTO `wishlist`(user_id, pid, name, price, image) VALUES('$user_id', '$product_id', '$product_name', '$product_price', '$product_image')") or die('query failed');
      $message[] = 'product added to wishlist';
   }
}

if (isset($_POST['add_to_cart'])) {

   $product_id = $_POST['product_id'];
   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if (mysqli_num_rows($check_cart_numbers) > 0) {
      $message[] = 'already added to cart';
   } else {

      $check_wishlist_numbers = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

      if (mysqli_num_rows($check_wishlist_numbers) > 0) {
         mysqli_query($conn, "DELETE FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
      }

      mysqli_query($conn, "INSERT INTO `cart`(user_id, pid, name, price, quantity, image) VALUES('$user_id', '$product_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart';
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>



   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,100;1,900&display=swap" rel="stylesheet">
   <style>
      body {
         background-image: linear-gradient(#A70D2A, #686A6C);

      }

      .header {
         width: 100%;
         background-color: #942A3F;
      }

      .active {
         visibility: visible;
         opacity: 1;
         bottom: 15px;
      }

      .navbar a:hover,
      .navbar .active,
      .navbar .active:focus,
      .navbar li:hover>a {
         color: #000000;
      }

      .navbar .dropdown ul {
         display: block;
         position: absolute;
         left: 14px;
         top: calc(100% + 30px);
         margin: 0;
         padding: 10px 0;
         z-index: 99;
         opacity: 0;
         visibility: hidden;
         background-image: linear-gradient(#A70D2A, #686A6C);
         transition: 0.3s;
         border-radius: 12px;
      }

      .navbar .dropdown ul a:hover,
      .navbar .dropdown ul .active:hover,
      .navbar .dropdown ul li:hover>a {
         color: #ffffff;
      }

      .navbar .dropdown>.dropdown-active,
      .navbar .dropdown .dropdown>.dropdown-active {
         display: block;
      }
   </style>
   <header class="header" style="background-color: #333333">

      <div class="flex">

         <a href="home.php" class="logo" style="color: #fff; font-weight: bold">RWS Trucking service</a>

         <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="activehome"><b>Home</b></a></li>
          <li><a href="about.php"><b>About</b></a></li>
          <li class="dropdown"><a href="#"><span><b>More \/</b></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="services.php"style="font-family: 'Bruno Ace SC'">SERVICES</a></li>
              <li><a href="contact.php"style="font-family: 'Bruno Ace SC'">CONTACT</a></li>

            </ul>
          </li>
        </ul>
      </nav><!-- .navbar -->
              

         </nav>
         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="user-btn" class="fas fa-user"></div>
         </div>
      </div>


   </header>
</head>

<body>

   <?php //@include 'header.php'; 
   ?>


   <center><img src="images/logo.jpg" width="1500" height="500" style="margin-top: 40px"></center>
   <section class="products">
      <h1 class="title" style="color: #fff">latest Services</h1>

      <div class="box-container">

         <?php
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed') ;
         if (mysqli_num_rows($select_products) > 0) {
            while ($fetch_products = mysqli_fetch_assoc($select_products)) {
         ?>
               <form action="contact.php" method="POST" class="box">
                  <a href="view_page.php?pid=<?php echo $fetch_products['id']; ?>" class="fas fa-eye"></a>
                  <!-- <div class="price">$ echo $fetch_products['price']; ?>/-</div> -->
                  <img src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="" class="image">
                  <div class="name" style="color: #fff"><?php echo $fetch_products['name']; ?></div>
                  <!-- <input type="number" name="product_quantity" value="1" min="0" class="qty"> -->
                  <input type="hidden" name="product_id" value="<?php echo $fetch_products['id']; ?>">
                  <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
                  <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
                  <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
                  <input type="submit" value="Inquire" name="add_to_wishlist" class="option-btn">
                  <!-- <input type="submit" value="add to cart" name="add_to_cart" class="btn"> -->
               </form>
         <?php
            }
         } else {
            echo '<p class="empty">no products added yet!</p>';
         }
         ?>

      </div>

      <!-- <div class="more-btn">
         <a href="shop.php" class="option-btn">load more</a>
      </div> -->

   </section>

   <!-- <section class="home-contact">

   <div class="content">
      <h3>have any questions?</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio officia aliquam quis saepe? Quia, libero.</p>
      <a href="contact.php" class="btn">contact us</a>
   </div>

</section> -->




   <?php @include 'footer.php';
   ?>

   <script src="js/script.js"></script>

</body>

</html>