<?php
require 'includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/95a2002ecf.js" crossorigin="anonymous"></script>
    <!-- External CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Voyage</title>
</head>
<style>
    .card-title {
        font-size: 2rem;
        text-align: center;
    }

    .card-text {
        font-size: 1.5rem;
    }

    .testimonial {
        background: #b3d9ff;
        margin-top: 10px;
        padding: 20px;
    }
</style>

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
            <img draggable="false" class="tilt" src="./images/image1.jpg" />
        </div>
    </section>
    <!-- Hero Section End  -->
    <!-- About us section starts here -->
    <section class="about" id="about">
        <h2 class="heading"><i class="fas fa-user-alt"></i> About <span>Us</span></h2>
        <div class="row">
            <div class="image">
                <img src="./images/image2.jpg" draggable="false" class="tilt" alt="Hero" />
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
                    <a href="https://imps1001.github.io/Portfolio_Website/" target="_blank" class="btn"><span>View More</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
    </section>
</body>
<!-- Services Section starts -->
<section>
    <div class="services" id="services">
        <h1 class="d-flex justify-content-center fs-1 fw-bold py-4">Our Destinations</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 d-flex align-items-stretch">
                    <img src="./images/paris.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 2.5rem; text-align: center;"><strong> Paris</strong></h5>
                        <p class="card-text" style="font-size: 1.5rem;">One of the most popular travel destinations.. Make sure to vist the city of Love..</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 d-flex align-items-stretch">
                    <img src="./images/swiss.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><strong> Switzerland</strong></h5>
                        <p class="card-text">Switzerland is famous for its breathtaking views and delicious treats.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 d-flex align-items-stretch">
                    <img src="./images/maldives.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><strong> Maldives</strong></h5>
                        <p class="card-text">Experience the adventurous water activities and take a look at it's stunning islands. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section ends -->



<!-- Contact Form  -->
<section class="text-black text-2xl relative contact" id="contact">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Drop your queries/requests</p>
    </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <div class="flex flex-wrap -m-2">
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
            <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
            <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-full">
          <div class="relative">
            <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
            <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
          </div>
        </div>
        <div class="p-2 w-full">
          <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
        </div>
        <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
          <a class="text-indigo-500">example@email.com</a>
          <p class="leading-normal my-5">49 Smith St.
            <br>Saint Cloud, MN 56301
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Contact Section ends -->
<section class="footer">

  <div class="box-container">

      <div class="box">
          <h3>Voyage</h3>
          <p>Thank you for visiting our page. Connect with us over socials. <br/> <br/> Keep Rising 🚀. </p>
      </div>

      <div class="box">
          <h3>quick links</h3>
          <a href="#home"><i class="fas fa-chevron-circle-right"></i> home</a>
          <a href="#about"><i class="fas fa-chevron-circle-right"></i> about</a>
          <a href="#services"><i class="fas fa-chevron-circle-right"></i> services</a>
          <a href="#testimonials"><i class="fas fa-chevron-circle-right"></i> testimonials</a>
          <a href="#contact"><i class="fas fa-chevron-circle-right"></i>contact/a>
      </div>

      <div class="box">
          <h3>contact info</h3>
          <p> <i class="fas fa-phone"></i>+91 XXX-XXX-XXXX</p>
          <p> <i class="fas fa-envelope"></i>voyage@gmail.com</p>
          <p> <i class="fas fa-map-marked-alt"></i>Delhi NCR, India</p>
          <div class="share">
              <a href="https://www.linkedin.com/in/imps1001/" class="fab fa-linkedin" aria-label="LinkedIn" target="_blank"></a>
              <a href="https://github.com/imps1001" class="fab fa-github" aria-label="GitHub" target="_blank"></a>
              <a href="mailto:codeatrandom@gmail.com" class="fas fa-envelope" aria-label="Mail" target="_blank"></a>
              <a href="https://t.me/imps1001" class="fab fa-telegram-plane" aria-label="Telegram" target="_blank"></a>
              <a href="https://www.youtube.com/@codeatrandom" target="_blank" class="fa-brands fa-youtube" aria-label="Youtube"></a>
          </div>
      </div>
  </div>

  <h1 class="credit">Designed with <i class="fa fa-heart pulse"></i> by <a href="https://www.linkedin.com/in/imps1001"> Team Voyage</a></h1>

</section>


<!-- ==== ALL MAJOR JAVASCRIPT CDNS STARTS ==== -->
<!-- scroll top btn -->
<a href="#home" aria-label="ScrollTop" class="fas fa-angle-up" id="scroll-top"></a>
<!-- scroll back to top -->
<!-- jquery cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<!-- typed.js cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js" integrity="sha512-1KbKusm/hAtkX5FScVR5G36wodIMnVd/aP04af06iyQTkD17szAMGNmxfNH+tEuFp3Og/P5G32L1qEC47CZbUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- particle.js links -->
<script src="./js/particles.min.js"></script>
<script src="./js/app.js"></script>
<script src="./js/script.js"></script>

</html>