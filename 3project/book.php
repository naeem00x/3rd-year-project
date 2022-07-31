<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book</title>

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
    <a href="home.php">home</a>
    <a href="about.php">About</a>
    <a href="package.php">Package</a>
    <a href="book.php">Book</a>
  </nav>

  <div id="menu-btn" class="fas fa-bars"></div>
  
  </section>
  <!-- header section ends -->

  <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
    <h1>Book</h1>
  </div>


  <!-- booking section starts  -->

<section class="booking">

<h1 class="heading-title">book your trip!</h1>

<form action="book_form.php" method="post" class="book-form">

   <div class="flex">
      <div class="inputBox">
         <span>name :</span>
         <input type="text" placeholder="enter your name" name="name">
      </div>
      <div class="inputBox">
         <span>email :</span>
         <input type="email" placeholder="enter your email" name="email">
      </div>
      <div class="inputBox">
         <span>phone :</span>
         <input type="number" placeholder="enter your number" name="phone">
      </div>
      <div class="inputBox">
         <span>address :</span>
         <input type="text" placeholder="enter your address" name="address">
      </div>
      <div class="inputBox">
         <span>where to :</span>
         <input type="text" placeholder="place you want to visit" name="location">
      </div>
      <div class="inputBox">
         <span>how many :</span>
         <input type="number" placeholder="number of guests" name="guests">
      </div>
      <div class="inputBox">
         <span>arrivals :</span>
         <input type="date" name="arrivals">
      </div>
      <div class="inputBox">
         <span>leaving :</span>
         <input type="date" name="leaving">
      </div>
   </div>

     
        <input type="submit" value="submit" class="btn" name="send">
    
    
   
    </form>

</section>

<!-- booking section ends -->












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