<?php
if (isset($message)) {
   foreach ($message as $message) {
      echo '
      <div class="message">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
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
        background-color: #333333;
        font-family: Poppins;
        height: 100vh;
    }

    
    html {
        overflow: scroll;
        overflow-y: hidden;
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
        border-bottom: 0px solid #fff;
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
        color: #fff;
        padding: 12px 30px;
        text-decoration: none;
        font-size: 25px;
    }
    
    nav ul li a:hover {
        background: rgba(0,0,0,0.1);
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
        position: relative;
        width: 30px;
        height: 4px;
        background: #fff;
        border-radius: 10px;
        cursor: pointer;
        z-index: 2;
        transition: 0.3s;
        margin-top: 30px;
    }
    
    .hamburger:before, .hamburger:after {
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
    
    .hamburger, .toggle-menu {
        display: none;
    }
    
    .navigation input:checked ~ .hamburger {
        background-color: #fff;
    }
    
    .navigation input:checked ~ .hamburger::before {
       top: 0;
       transform: rotate(-45deg);
       width: 30px;
    }
    
    .navigation input:checked ~ .hamburger::after {
        top: 0;
        transform: rotate(45deg);
        width: 30px;
     }
    
     .navigation input:checked ~ .menu {
        right: 0;
        box-shadow: -20px 0 40px rgba(0,0,0,0.3);
     }
    
     @media screen and (max-width: 1062px) {
        .hamburger, .toggle-menu {
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
    
        .menu li {
            width: 100%;
        }
    
        .menu li a, .menu li a:hover {
           padding: 30px; 
           font-size: 24px;
           box-shadow: 0 1px 0 rgba(112,102,119,0.5) inset;
        }
     }
   </style>
</head>
<body>
<nav>
    
            <div class="navigation">
            <input type="checkbox" class="toggle-menu">
            <div class="hamburger"></div>
    
            <ul class="menu">
            </li>  <a href="admin_products.php" class="delete-btn" style="margin-left: 50px; margin-bottom: 20px; margin-top: 15px; color: white; background-color: #8C3345">Update Services</a></li>
            </li>  <a href="about_update.php" class="delete-btn" style="margin-left: 50px; margin-bottom: 20px; margin-top: 15px; color: white; background-color: #8C3345">Update About</a></li>
            </li> <a href="logout.php" class="delete-btn" style="margin-left: 50px; margin-bottom: 20px; margin-top: 15px; color: white;">logout</a></li>
            </ul>
        </div>    
        </nav>
     
        <!-- <div class="account-box">
            <p>username : <span><///?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><//?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
        </div>
            <div id="user-btn" class="fas fa-user"></div>
         </div> -->
    
    

    
        
   
    
            </div>
   
</body>
</html>
      

  
