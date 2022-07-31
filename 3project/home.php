<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

  <!-- swiper css link -->
  <link
  rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>


  <!--font awesome cdn link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

  <!-- regular css file link-->
  <link rel="stylesheet" href="css/home.css" >


</head>
<body>
  <!-- header section starts -->
  <section class="header">

  <a href="home.php" class="logo">BagPack</a>

  <nav class="navbar">
    <a href="home.php">Home</a>
    <a href="about.php">About</a>
    <a href="package.php">Package</a>
    <a href="book.php">Book</a>
  </nav>

  <div id="menu-btn" class="fas fa-bars"></div>
  
  </section>
  <!-- header section ends -->



  <!-- home section starts -->

  <section class="home">

<div class="swiper home-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
         <div class="content">
            <span>Explore, Discover, Travel</span>
            <h3>Travel arround the world</h3>
            <a href="package.php" class="btn">Discover more</a>
            <a href="registration.php" class="btn">Register now!!</a>
         </div>
      </div>

      <div class="swiper-slide slide" style="background:url(images/home-slide-6.jpg) no-repeat">
         <div class="content">
            <span>Explore, Discover, Travel</span>
            <h3>Discover the new places</h3>
            <a href="package.php" class="btn">Discover more</a>
         </div>
      </div>

      <div class="swiper-slide slide" style="background:url(images/home-slide-4.jpg) no-repeat">
         <div class="content">
            <span>explore, discover, travel</span>
            <h3>make your tour worthwhile</h3>
            <a href="package.php" class="btn">discover more</a>
         </div>
      </div>
      
   </div>

   <div class="swiper-button-next"></div>
   <div class="swiper-button-prev"></div>

</div>

</section>
<!-- home section ends -->




<!-- home about start from bellow -->

<section class="home-about">

  <div class="image">
    <img src="images/about-us-project.jpg" alt="">
  </div>

  <div class="content">
    <h3>about us</h3>
    <p>Hi good people, hope you're doing well with good health. To maintain good health, good mind (fresh mind) 
      is also important. To freshing your mind also travel is also important. So we are 
      here for your help. Our travel agency is much reliable for travelling all over the world
      and discovering new people and places at a very cheap and comfortable rate. we are always here for your 
      comfort. Thank you!
     <br><br> <a href="about.php" class="btn">Read more..</a>
    </p>
  </div>

</section>
<!-- HOME-about ends-->
 

<!-- home package section start -->
<section class="home-packages">

   <h1 class="heading-title"> our packages </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>adventure & tour</h3>
            <p>Travel to INDIA. Full of man made architecture and god gifted nature.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>adventure & tour</h3>
            <p>Travel to JAMAICA, BARBADOS, TRINIDAD & TOBAGO Island.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>adventure & tour</h3>
            <p>Travel to EURUPE,The beauty of nature!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

</section>

<!-- home package section ends -->
  
 


<!-- services section starts -->
   <section class="services">

    <h1 class="heading-title">Our Services</h1>

      <div class="box-container">

        <div class="box">
          <img src="images/icon-1.png" alt="pic">
            <h3>Adventures</h3>
        </div>

        <div class="box">
          <img src="images/icon-2.png" alt="pic">
            <h3>Tour Guide</h3>
        </div>

        <div class="box">
          <img src="images/icon-3.png" alt="pic">
            <h3>Tracking</h3>
        </div>

        <div class="box">
          <img src="images/icon-4.png" alt="pic">
            <h3>Hill Camp Fire</h3>
        </div>

        <div class="box">
          <img src="images/icon-5.png" alt="pic">
            <h3>Off Road</h3>
        </div>

        <div class="box">
          <img src="images/icon-6.png" alt="pic">
            <h3>Forest Camping</h3>
        </div>

      </div>
    
   </section>
   <!-- services section ends -->


<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>upto 50% off</h3>
      <p>Travel to INDIA and asian countries like NEPAL and SRILANKA packages are now available at 50% discount</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>

<!-- home offer section ends -->









<!-- Footer section starts from here -->
<section class="footer">

  <div class="box-container">

    <div class="box">

      <h3> Quick Links<h3>

      <a href="home.php"><i class="fas fa-home"></i>home</a>
      <a href="about.php"><i class="fas fa-comment-dots"></i>About</a>
      <a href="package.php"><i class="fas fa-edit"></i>Package</a>
      <a href="book.php"><i class="fas fa-calendar-alt"></i>Book</a>

    </div>

    <div class="box">

     <h3> Extra Links<h3>

      <a href="#"><i class="fas fa-comments"></i>ask question</a>
      <a href="#"><i class="fas fa-stream"></i>about us</a>
      <a href="#"><i class="fas fa-user-lock"></i>privacy policy</a>
      <a href="#"><i class="fas fa-user-shield"></i>terms and conditions</a>
    </div>

    <div class="box">

      <h3>contact info<h3>

      <a href="#"><i class="fas fa-phone"></i>+8801792-142478</a>
      <a href="#"><i class="fas fa-phone"></i>+8801813-802325</a>
      <a href="#"><i class="fas fa-envelope"></i>team★max@gmail.com</a>
      <a href="#"><i class="fas fa-map"></i>Sylhet, Bangladesh- 3100</a>
     
    </div>

    <div class="box">
      <h3>follow us </h3>
      <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
      <a href="#"><i class="fab fa-twitter"></i>twitter</a>
      <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
      <a href="#"><i class="fab fa-telegram"></i>telegram</a>
    </div>
</div>

<div class="credit">© Created by <span>Team★max-(naeem & hajera) </span>| all right reserved!</div>

</section>
<!-- footer section ends -->




<!-- swiper js link -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


<!-- custom js file link -->
<script src="js/script.js"></script>
</body>
</html>