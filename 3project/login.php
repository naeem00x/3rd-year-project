<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <!-- regular css file link-->
   <link rel="stylesheet" href="css/home.css" >

   <!--font awesome cdn link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


    <title>login</title>
  
  <style>
    a{
      text-decoration:none;
    }
    
  </style>
  </head>
  <body>
     <!-- header section starts -->
  <section class="header">

<a href="home.php" class="logo">BagPack</a>

<nav class="navbar">
  <a href="home.php">home</a>
  <a href="registration.php">Registration</a>
  
</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>
<!-- header section ends -->
<div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
    <h1>Login</h1>
  </div>


  <!-- form -->

  <h1 class="text-center bg-dark text-white">Please Login Here:</h1>
    
    <div class="container">
      <div class="row justify-content-center">
      <div class="col-lg-10 col-md-8 col-sm-12">
      <form style="background:#bdbdb6" onsubmit="return validation()">
       <br>
     
       <div class="form-group mb-3" style="font-size:2rem">
          <label>Email</label>
          <input type="email" name="" id="email" placeholder="Enter Your Email Address:" class="form-control form-control-lg">
          <span id="emailerror" class="text-danger" ></span>
      </div>
       
      <div class="form-group mb-3" style="font-size:2rem">
          <label>Password:</label>
          <input type="password" name="" id="password" placeholder="Enter Your Password:"class="form-control form-control-lg">
          <span id="passworderror" class="text-danger" ></span>
      </div>


      <input type="submit" name="" class="btn btn-primary">
      <div class="form-group text-center">
        <h4>Are you not registred yet?</h4>
        <a href="registration.php" style="font-size:1.7rem">Registration here</a>
      </div>
      <!-- <h2>Are you already registred ?</h2> -->
        
      
    </form>
  </div>
  </div>
    </div>

    <br>


    <!-- javascript start -->
    <script type="text/javascript">
        
        let menu = document.querySelector('#menu-btn');
        let navbar = document.querySelector('.header .navbar');

       menu.onclick = () =>{
      menu.classList.toggle('fa-times');
      navbar.classList.toggle('active');
      };

      window.onscroll = () =>{
      menu.classList.remove('fa-times');
      navbar.classList.remove('active');
};

        
        function validation(){
       
        var password = document.getElementById('password').value;
       
        var email = document.getElementById('email').value;
        
        
         
          var passwordcheck = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,14}$/;
          var emailcheck = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/ 
          

         
          if(emailcheck.test(email)){
            document.getElementById('emailerror').innerHTML = "";
          }
          else{
            document.getElementById('emailerror').innerHTML = "** Email is invalid";
            return false;
          }
          
          if(passwordcheck.test(password)){
            document.getElementById('passworderror').innerHTML = "";
          }
          else{
            document.getElementById('passworderror').innerHTML = "** Given password is invalid";
            return false;
          }
          
       
          
         
          // if(mobilecheck.test(number)){
          //   document.getElementById('mobileerror').innerHTML = "";
          // }
          // else{
          //   document.getElementById('mobileerror').innerHTML = "** Number is invalid";
          //   return false;
          // }
        }
          
    

    </script>

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
<!-- <script src="regScript.js"></script> -->
  </body>
</html>