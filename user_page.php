<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/style2.css">

</head>
<body>


   <!-- header section starts  -->

<header>

<a href="#" class="logo"><span>Your</span>Home</a>

<nav class="navbar">
    <a href="#home">home</a>
    <a href="#services">services</a>
    <a href="#featured">featured</a>
    <a href="#agents">agents</a>
    <a href="#contact">contact</a>
</nav>

<div class="icons">
    <div id="menu-bars" class="fas fa-bars"></div>
    <a href="#" class="fas fa-heart"></a>
    <a href="#" class="fas fa-user"></a>
</div>

</header>

<!-- header section ends -->
   
<div class="container">

   <div class="content">
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <h3>On our website, homes can be freely sold, bought or rented is complete safety.</h3>
      <br>
      <br>
      <br>
      <br>
      <a href="logout.php" class="btn">logout</a>
      <a href="website.php" class="btn">Start browsing</a>
   </div>

</div>




<!-- javascript part  -->
<script>

let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    navbar.classList.toggle('active');
    menu.classList.toggle('fa-times');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
    menu.classList.remove('fa-times');
}

</script>

</body>
</html>