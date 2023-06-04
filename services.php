<?php

include 'config.php';


// session_start();
// $user_id = $_SESSION['user_id'];

// if(!isset($user_id)){
//    header('location:login.php');
// };

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

// if(isset($_POST['add_to_cart'])){

//     $product_id = $_POST['product_id'];
//     $product_name = $_POST['product_name'];
//     $product_price = $_POST['product_price'];
//     $product_image = $_POST['product_image'];
//     $product_quantity = $_POST['product_quantity'];

//     $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

//     if(mysqli_num_rows($check_cart_numbers) > 0){
//         $message[] = 'already added to cart';
//     }else{

//         $check_wishlist_numbers = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

//         if(mysqli_num_rows($check_wishlist_numbers) > 0){
//             mysqli_query($conn, "DELETE FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
//         }

//         mysqli_query($conn, "INSERT INTO `cart`(user_id, pid, name, price, quantity, image) VALUES('$user_id', '$product_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
//         $message[] = 'product added to cart';
//     }

// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Services Offered</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <style>
      body {
         background-image: linear-gradient(#96273C, #686A6C);
         background-repeat: no-repeat;
         background-position: center;

         font-family: 'Bruno Ace Sc';

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

      /* .navbar a:hover,
      .navbar .active,
      .navbar .active:focus,
      .navbar li:hover>a {
         color: #000000;
      } */

      .dropdown {
         position: relative;
         /* display: inline-block; */
      }

      .dropdown ul {

         display: none;
         position: absolute;
         top: 100%;
         left: 0;
         padding: 0;
         margin: 0;
         list-style: none;
      }

      .dropdown:hover ul {
         display: block;
      }

      .dropdown ul li a {
         display: block;
         text-decoration: none;
         color: #000;
         font-family: 'Bruno Ace SC';
      }

      /* .dropdown ul li a:hover {
  background-color: #f2f2f2;
} */


      /* HUMBERGER */
      @font-face {
         font-family: 'Poppins';
         src: url(Fonts/Poppins-Regular.ttf);
      }

      @font-face {
         font-family: 'Comfortaa';
         src: url(Fonts/Comfortaa-VariableFont_wght.ttf);
      }

      @font-face {
         font-family: 'DancingScript';
         src: url(Fonts/DancingScript-VariableFont_wght.ttf);
      }

      * {
         padding: 0;
         margin: 0;
         color: #A6808C;
         box-sizing: border-box;
      }

      body {
         background-color: #565264;
         font-family: Poppins;
         margin-top: 5%;
      }

      html {
         overflow-y: scroll;
         overflow-x: hidden;
      }

      ::-webkit-scrollbar {
         width: 0%;
      }

      nav {
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         height: 80px;
         padding: 10px 90px;
         box-sizing: border-box;
         background: rgba(0, 0, 0, 0.4);
         /* border-bottom: 0px solid #fff; */
         z-index: 9999
      }


      nav .logo {
         padding: -22px 20px;
         height: 50px;
         float: left;
      }

      nav ul {
         list-style: none;
         float: right;
         margin: 0;
         padding: 0;
         display: flex;
      }

      nav ul li a {
         line-height: 60px;
         /* color: #fff; */
         padding: 12px 30px;
         text-decoration: none;
         font-size: 25px;
      }

      nav ul li a:hover {
         background: rgba(0, 0, 0, 0.1);
         border-radius: 5px;
      }

      .text {
         font-size: 2rem;
         padding: 2rem;
         background-color: #565264;
         color: whitesmoke;
      }

      .title {
         font-size: 7rem;
         color: whitesmoke;
         text-shadow: 0 0 5px black;
      }


      .background {
         position: absolute;
         height: 100%;
         width: 100%;
         object-fit: cover;
         z-index: -1;
         transform: translateZ(-10px) scale(3);
         background-repeat: no-repeat;
      }

      header {
         position: relative;
         display: flex;
         justify-content: center;
         align-items: center;
         height: 100%;
         transform-style: preserve-3d;
         z-index: -1;
      }


      .wrapper {
         height: 100vh;
         overflow-y: auto;
         overflow-x: hidden;
         perspective: 10px;
      }

      .hamburger {
         margin-top: 25px;
         position: relative;
         width: 30px;
         height: 4px;
         background: #fff;
         border-radius: 10px;
         cursor: pointer;
         z-index: 2;
         transition: 0.3s;
      }

      .hamburger:before,
      .hamburger:after {
         content: "";
         position: absolute;
         height: 4px;
         right: 0;
         background: #fff;
         border-radius: 10px;
         transition: 0.3s;

      }

      .hamburger:before {
         top: -10px;
         width: 20px;
      }

      .hamburger:after {
         top: 10px;
         width: 20px;
      }

      .toggle-menu {
         position: absolute;

         width: 30px;
         height: 100%;
         z-index: 3;
         cursor: pointer;
         opacity: 0;
      }

      .hamburger,
      .toggle-menu {
         display: none;
      }

      .navigation input:checked~.hamburger {
         background: transparent;
      }

      .navigation input:checked~.hamburger::before {
         top: 0;
         transform: rotate(-45deg);
         width: 30px;
      }

      .navigation input:checked~.hamburger::after {
         top: 0;
         transform: rotate(45deg);
         width: 30px;
      }

      .navigation input:checked~.menu {
         right: 0;
         box-shadow: -20px 0 40px rgba(0, 0, 0, 0.3);
      }

      @media screen and (max-width: 1062px) {

         .hamburger,
         .toggle-menu {
            display: block;
         }

         .header {
            padding: 10px 20px;
         }

         nav ul {
            justify-content: start;
            flex-direction: column;
            align-items: center;
            position: fixed;
            top: 0;
            right: -300px;
            background-color: #565264;
            width: 300px;
            height: 100%;
            padding-top: 65px;
         }

         /* .menu li {
            width: 100%;
         }

         .menu li a,
         .menu li a:hover {
            padding: 30px;
            font-size: 24px;
            box-shadow: 0 1px 0 rgba(112, 102, 119, 0.5) inset;
         } */
      }

      /* Styling the dropdown menu */
      /* ul.dropdown-menu {
  display: none;  
  background-color: #f9f9f9; 
  position: absolute;

} */

      /* Show the dropdown menu on hover */
      /* ul.dropdown-menu li:hover {
  background-color: #e5e5e5;
} */


      /* Show the dropdown menu on hover */
      .dropdown:hover ul.dropdown-menu {
         display: block;
         border-radius: 20px;
         padding: 15px;

      }
   </style>
</head>

<body>
   <nav style="background-color: #333333">
      <!-- <div class="logo">
         <img src="images/logo.jpg" height="60px" width=auto style="margin-left: 45px">
      </div> -->

      <div class="navigation" style="margin-right: 40px">
         <input type="checkbox" class="toggle-menu">
         <div class="hamburger"></div>

         <ul class="menu">
            <li><a href="index.php"><b>Home</b></a></li>
            <li><a href="about.php"><b>About</b></a></li>
            <li class="dropdown">
               <a href="#" class="activehome">
                  <span><b>More</b></span>
                  <!-- <i class="bi bi-chevron-down dropdown-indicator"></i> -->
               </a>
               <ul class="dropdown-menu" style="background-image: linear-gradient(#A70D2A, #686A6C);">
                  <li><a href="services.php" class="active" style="font-family: 'Bruno Ace SC'">SERVICES</a></li>
                  <li><a href="contact.php" style="font-family: 'Bruno Ace SC'">CONTACT</a></li>
               </ul>
            </li>
         </ul>

      </div>
   </nav>

   <?php //@include 'header.php'; 
   ?>

   <section class="quick-view">

      <h3 class="title" style="color: #fff">service details</h3>

      <?php

      $select_products = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
      if (mysqli_num_rows($select_products) > 0) {
         while ($fetch_products = mysqli_fetch_assoc($select_products)) {
      ?>
            <form action="contact.php" method="POST">
               <img src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="" class="image">
               <div class="name"><?php echo $fetch_products['name']; ?></div>
               <!-- <div class="price">$<?php echo $fetch_products['price']; ?>/-</div> -->
               <div class="details"><?php echo $fetch_products['details']; ?></div>
               <!-- <input type="number" name="product_quantity" value="1" min="0" class="qty"> -->
               <input type="hidden" name="product_id" value="<?php echo $fetch_products['id']; ?>">
               <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
               <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
               <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
               <button type="submit" class="option-btn">Inquire</button>
               <!-- <input type="submit" value="add to cart" name="add_to_cart" class="btn"> -->
            </form><br><br><br><br>
      <?php
         }
      } else {
         echo '<p class="empty">no products details available!</p>';
      }

      ?>

      <div class="more-btn">
         <a href="index.php" class="option-btn">go to home page</a>
      </div>

   </section>

   <script src="js/script.js"></script>

</body>

</html>