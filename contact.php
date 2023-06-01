<?php

include 'config.php';


//session_start();
// $user_id = $_SESSION['user_id'];

// if(!isset($user_id)){
//    header('location:login.php');
// };

if(isset($_POST['send'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

    if(mysqli_num_rows($select_message) > 0){
        $message[] = 'message sent already!';
    }else{
        mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
        $message[] = 'message sent successfully!';
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>



   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

   <style>
    body{
      background-image:linear-gradient(#A70D2A, #686A6C);
      background-repeat: no-repeat;
      background-position: center;
    
    
        font-family: 
        'Bruno Ace Sc';
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
    <li><a href="index.php"><b>Home</b></a></li>
    <li><a href="about.php"><b>About</b></a></li>
    <li class="dropdown"><a href="#" class="active"><span><b>More \/</b></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
      <ul>
      
        <li><a href="services.php" style="font-family: 'Bruno Ace SC'">SERVICES</a></li>
        <li><a href="contact.php" style="font-family: 'Bruno Ace SC'" class="active">CONTACT</a></li>
        
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
    <h3>contact us</h3>
    <p> <a href="home.php">home</a> / contact </p>
    
</section>
<section class="contact">

    <form action="send.php" method="POST">
    <section id="cntct" class="cntct" style="color: #fff; font-size: 15px">
      <div class="container">

        <div class="row gy-4 justify-content-center">

          <div class="col-lg-3"> 
            <div class="info-item d-flex">
            <i class="material-icons" style="font-size:36px">location_on</i>
              <div>
                <h4>Location: </h4>
                <p> 1486 Aldama St., Sta Barbara, Baliuag, Bulacan 3006</p>
                <br>
              </div>
            </div>
          </div>
         <!-- End Info Item  -->

          <div class="col-lg-3"> 
             <div class="info-item d-flex">
            <i class="material-icons" style="font-size:36px">email</i>
              <div>
                <h4>Email:</h4>
                <p>rwstruckingservices@gmail.com</p>
                <br>
              </div>
            </div>
          </div>
</section>
          <!-- End Info Item  -->
        <h3 style="color:#333333">send us message!</h3>
        <input type="text" name="name" placeholder="enter your name" class="box" required> 
        <input type="email" name="email" placeholder="enter your email" class="box" required>
        <input type="text" name="number" placeholder="enter subject" class="box" required>
        <textarea name="message" class="box" placeholder="enter your message" required cols="30" rows="10"></textarea>
        <input type="submit" value="send message" name="submit" class="btn">
    </form>

</section>






<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>