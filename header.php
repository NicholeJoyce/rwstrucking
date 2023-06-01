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
<style>
    .header {
        width: 100%;
        background-color: #333333;
    }
</style>
<header class="header">

    <div class="flex">

        <a href="home.php" class="logo" style="color: #fff; font-weight: bold; background-color: #333333">RWS Trucking service</a>

        <nav class="navbar" style="background-color: #333333">
            <ul>
                
                <li><a href="home.php" style="color: #fff">HOME</a></li>
                <li><a href="#" style="color: #fff">PAGES v</a>
                    <ul>
                        <li><a href="about.php" style="color: #fff; background-color: #1F1F1F">ABOUT</a></li>
                        <li><a href="contact.php" style="color: #fff; background-color: #1F1F1F">CONTACT</a></li>
                    </ul>
                </li>
                <!-- <li><a href="shop.php">SHOP</a></li> -->
                <!-- <li><a href="orders.php">ORDERS</a></li> -->
                <li><a href="#" style="color: #fff">ACCOUNT v</a>
                    <ul>
                        <li><a href="login.php" style="color: #fff; background-color: #1F1F1F">LOGIN</a></li>
                        <li><a href="register.php" style="color: #fff; background-color: #1F1F1F">REGISTER</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
             <i class="bi bi-person-circle"></i> 
            <div id="user-btn" class="fas fa-user"></div>
            <?php
            $select_wishlist_count = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE user_id = '$user_id'") or die('query failed');
            $wishlist_num_rows = mysqli_num_rows($select_wishlist_count);
            ?>
            <a href="wishlist.php"><i class="fas fa-heart"></i><span>(<?php //echo $wishlist_num_rows; ?>)</span></a>
            <?php
            $select_cart_count = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
            $cart_num_rows = mysqli_num_rows($select_cart_count);
            ?>
            <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?php //echo $cart_num_rows; ?>)</span></a>
        </div>

        <div class="account-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
        </div>

    </div>

</header>