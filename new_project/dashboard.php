<?php
require 'includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/95a2002ecf.js" crossorigin="anonymous"></script>
    <!-- External CSS -->
    <link href="css/style.css" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>
    <!-- Navbar Starts -->
    <?php include './includes/header.php' ?>
    <!-- Navbar Ends -->
    <!-- Hero Section Start-->
    <section class="home" id="home">
        <div id="particles-js"></div>
        <div class="content">
        <h2>Visit your favorite destinations! <br /></h2>
            <p>Get ready to <br /><span class="typing-text"></span></p>
            <a href="./forms/register.php" class="btn"><span>Register</span>
                <i class="fa-solid fa-circle-right"></i>
            </a>
        </div>
        <div class="image">
            <img draggable="false" class="tilt" src="./images/hero.png" />
        </div>
    </section>
    <!-- Hero Section End  -->
    <!-- About us section starts here -->
    <section class="about" id="about">
        <h2 class="heading"><i class="fas fa-user-alt"></i> About <span>Me</span></h2>
        <div class="row">
            <div class="image">
                <img src="./images/hero2.png" draggable="false" class="tilt" alt="Hero" />
            </div>
            <div class="content">
            <h3>Hello, This is Team Voyage!</h3>
                <p>Travel is the main thing you purchase that makes you more extravagant”. We, at ‘Organization Name’, swear
                    by this and put stock in satisfying travel dreams that make you perpetually rich constantly.</p>
                  <p> We have been moving excellent encounters for a considerable length of time through our cutting-edge planned 
                    occasion bundles and other fundamental travel administrations. We rouse our clients to carry on with a rich life,
                    brimming with extraordinary travel encounters.</p>
               <p>We offer the best limits on our top-rated visit bundles to clients who pick our viable administrations over and over.
                 How about we remind you indeed that we don’t expect to be your visit and travel specialists; we endeavor to be your 
                 vacation accomplices until the end of time.</p>

                <div class="profilebtn" style="margin-bottom:0px;">
                    <a href="https://imps1001.github.io/Portfolio_Website/" target="_blank" class="btn"><span>View my profile</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
    </section>
    <!-- particle.js links -->
    <script src="./js/particles.min.js"></script>
    <script src="./js/app.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>