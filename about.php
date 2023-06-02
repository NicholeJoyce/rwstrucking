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
      body {
         background-image: linear-gradient(#A70D2A, #686A6C);
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
  display: inline-block;
}

.dropdown ul {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  /* background-color: #fff; */
  padding: 0;
  margin: 0;
  list-style: none;
  /* box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2); */
}

.dropdown:hover ul {
  display: block;
}

.dropdown ul li {
  padding: 10px;
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
ul.dropdown-menu li:hover {
  background-color: #e5e5e5;
}

/* Styling the hamburger menu icon */
/* .dropdown a .dropdown-indicator {
  margin-left: 5px;
} */

/* Show the dropdown menu on hover */
.dropdown:hover ul.dropdown-menu {
  display: block;
}

   </style>
</head>
<body>
<nav style="background-color: #333333">
      <!-- <div class="logo">
                <a href="index.html">
                    <img src="Pictures\Logo DesignK whitegreen.png" alt="DesignK" height="50px" width="200px">
                </a>
            </div> -->

      <div class="navigation">
         <input type="checkbox" class="toggle-menu">
         <div class="hamburger"></div>

         <ul class="menu">
  <li><a href="index.php" ><b>Home</b></a></li>
  <li><a href="about.php" class="activehome"><b>About</b></a></li>
  <li class="dropdown">
    <a href="#">
      <span><b>More</b></span>
      <!-- <i class="bi bi-chevron-down dropdown-indicator"></i> -->
   </a>
    <ul class="dropdown-menu">
      <li><a href="services.php" style="font-family: 'Bruno Ace SC'">SERVICES</a></li>
      <li><a href="contact.php" style="font-family: 'Bruno Ace SC'">CONTACT</a></li>
    </ul>
  </li>
</ul>

      </div>
   </nav>

   
<?php //@include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/logo.jpg" alt="" style="margin-right: 580px">
        </div>

        <div class="content-about">
            <!-- <h3>why choose us?</h3> -->
            <br>
            <section class="products">
      <div class="box-container" style="color: #fff">

         <?php
         $select_products = mysqli_query($conn, "SELECT * FROM `about` LIMIT 6") or die('query failed') ;
         if (mysqli_num_rows($select_products) > 0) {
             ($fetch_products = mysqli_fetch_assoc($select_products)) 
         ?>
               <form action="" method="POST" class="boxabout">
                  <div class="name" style="   max-width: 1000px;
   border-radius: 20px;
   width: auto;
   height: auto;
   border:var(--border);
   padding:2rem;
   text-align: center;
   margin: auto;
   box-shadow: var(--box-shadow); color: #fff"><?php echo $fetch_products['aboutcontent']; ?></div>
               </form>
         <?php
            }
          else {
            echo '<p class="empty">this page is yet to be updated by the owner!</p>';
         }
         ?>
         </selection>


            <!-- <p>Our trucking service is the result of a relentless pursuit of success. We did not just stumble upon this industry and become an overnight success. No, it took years of hard work, determination, and perseverance to get to where we are today. Starting a business is never easy. We faced many challenges along the way, from financial struggles to operational setbacks. But we never gave up. We kept trying and trying until we found our footing in the trucking industry. We knew that success would not come easy, but we were willing to put in the effort. We worked long hours, made sacrifices, and took risks to build our company from the ground up. And it was not just about making money; we were passionate about the industry and wanted to provide the best possible service to our clients. Through our dedication and hard work, we slowly but surely began to establish ourselves as a reliable and trustworthy trucking service. Our clients started to take notice of our commitment to excellence and began to refer us to others. And now, we are proud to say that we have settled into our place in the trucking industry. But that does not mean we are done striving for success. We are constantly looking for ways to improve and grow, to better serve our clients and to stay ahead of the competition.</p> -->
            <a href="contact.php" class="btn" style=" text-align: center">INQUIRE</a>
        </div>

    </div>

    
    </div>

</section>



<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>