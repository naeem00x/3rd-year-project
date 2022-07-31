<?php
session_start();

if(isset($_SESSION['email'])){
  session_unset();
  session_destroy();
  echo "<script>alert('you have logged out from your account')</script>";
  echo "<script>location.href='login.php'</script>";
}
else{
  echo "<script>alert('url invalid')</script>";
  echo "<script>location.href='login.php'</script>";
}

?>