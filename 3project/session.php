<?php 
  $email = "naeem2023syl@gmail.com";
  $password = "Naeem@123";
 
  session_start();

  if(isset($_SESSION['email'])){
    echo "<h3>Come here to registration...".$_SESSION['email']."</h3>";
    // echo "<br><a href='reg.php'>Registration</a>";
    echo "<br> <a href='logout.php'><input type='button'
    value='logout' name='logout'>";
  }
  else{
    if($_REQUEST['email']==$username && $_REQUEST['password']==$password){
      $_SESSION['email'] = $username;
      echo "<script>alert('Authentic User')</script>";
      echo "<script>location.href='session.php'</script>";
    }
    else{
      echo "<script>alert('Error 404 not found')</script>";
      echo "<script>location.href='registration.php'</script>";
      echo "<script>location.href='login.php'</script>";
    }
  }
  

  $username = $_POST['email'];
  $password = $_POST['password'];
  
?>