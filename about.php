<?php

include 'config.php';

//session_start();
//$user_id = $_SESSION['user_id'];

// if(!isset($user_id)){
//    header('location:login.php');
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">
<style>
    *{
        font-family: 'Bruno Ace SC';   
    }
    body{

background-image:linear-gradient(#A70D2A ,#686A6C);
font-family: 'Bruno Ace SC';
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
<header class="header" style="background-color: #97253B">

      <div class="flex">

         <a href="home.php" class="logo" style="color: #fff; font-weight: bold">RWS Trucking service</a>

         <nav id="navbar" class="navbar">
        <ul>
            
          <li><a href="index.php" ><b>Home</b></a></li>
          <li><a href="about.php"class="active"><b>About</b></a></li>
          <li class="dropdown"><a href="#"><span><b>More \/</b></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="services.php"style="font-family: 'Bruno Ace SC'">SERVICES</a></li>
              <li><a href="contact.php" style="font-family: 'Bruno Ace SC'">CONTACT</a></li>

            </ul>
          </li>
        </ul>
      </nav><!-- .navbar -->
              
               <!-- <a href="logout.php" class="delete-btn" style="margin-left: 100px">logout</a> -->

         </nav>
         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <!-- <div id="user-btn" class="fas fa-user"></div> -->
         </div>
      </div>


   </header>
</head>
<body>
   
<?php //@include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/logo.jpg" alt="">
        </div>

        <div class="content-about">
            <h3>why choose us?</h3>
            <br>
            <p>Our trucking service is the result of a relentless pursuit of success. We did not just stumble upon this industry and become an overnight success. No, it took years of hard work, determination, and perseverance to get to where we are today. Starting a business is never easy. We faced many challenges along the way, from financial struggles to operational setbacks. But we never gave up. We kept trying and trying until we found our footing in the trucking industry. We knew that success would not come easy, but we were willing to put in the effort. We worked long hours, made sacrifices, and took risks to build our company from the ground up. And it was not just about making money; we were passionate about the industry and wanted to provide the best possible service to our clients. Through our dedication and hard work, we slowly but surely began to establish ourselves as a reliable and trustworthy trucking service. Our clients started to take notice of our commitment to excellence and began to refer us to others. And now, we are proud to say that we have settled into our place in the trucking industry. But that does not mean we are done striving for success. We are constantly looking for ways to improve and grow, to better serve our clients and to stay ahead of the competition.</p>
            <a href="contact.php" class="btn">INQUIRE</a>
        </div>

    </div>

    
    </div>

</section>

<!-- <section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-5.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

    </div>

</section> -->











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>