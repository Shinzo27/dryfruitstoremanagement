<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
    header("location: Signin.php");
}
?>

<?php

session_start();
$loggedin = false;
if (isset($_SESSION['loggedin'])) {
    $loggedin = true;
} else {
    $loggedin = false;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patel's Dryfruit and Masala</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/feedback.css">

    <link rel="shortcut icon" type="x-icon" href="images\icon.ico">

</head>

<body>

    <!-- header section starts     -->

    <section class="header">

        <img src="images\logo.png" class="logo">

        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="Product.php">shop</a>
            <a href="gallery.php">gallery</a>
            <a href="index.php#about">about</a>
            <a href="index.php#food">expertise</a>
            <a href="index.php#blogs">reviews</a>
            <a href="index.php#footer">Contact us</a>
            <?php
            if ($loggedin == true) {
            ?>
                <a href="profile.php"><?php echo ($_SESSION['loguname']); ?></a>;
            <?php
            } else {
            ?>
                <a href="Signin.php">Login</a>;
            <?php
            }
            ?>
            <a href="cart.php">Cart</a>
            <?php
            if ($loggedin == true) { ?>
                <a href="logout.php">Log out</a>
            <?php }
            ?>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <!-- order section starts  -->

    <section class="order" id="order">

        <div class="heading">
            <span>Give Feedback!</span>
            <h3>It Inspires us to improve!</h3>
        </div>

        <form action="afterlogin.php">
            <div class="box-container">
                <div class="box">
                    <div class="inputBox">
                        <span>First Name</span>
                        <input type="text" placeholder="First name">
                    </div>
                    <div class="inputBox">
                        <span>Last Name</span>
                        <input type="text" placeholder="Last Name">
                    </div>
                    <div class="inputBox">
                        <span>email</span>
                        <input type="text" placeholder="Email">
                    </div>
                    <div class="inputBox">
                        <span>Short Message</span>
                        <input type="text" placeholder="Short Message">
                    </div>
                    <div class="inputBox">
                        <span>Message</span>
                        <textarea name="" placeholder="Your Message" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>

            </div>
            <input type="submit" value="Submit feedback" class="btn">
        </form>

    </section>

    <!-- order section ends -->


    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <script>
        lightGallery(document.querySelector('.gallery .gallery-container'));
    </script>
</body>

</html>