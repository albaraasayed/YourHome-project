<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive real estate website design tutorial</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/videostyle.css">
    

</head>
<body>
    
<!-- header section starts  -->

<header>

    <a href="#" class="logo"><span>Your</span>Home</a>

    <nav class="navbar">
        <a href="website.php">home</a>
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



<!-- start video section -->
<div class="video">
        <div class="container2">
            <h2 class="special-heading">WATCH <span>FIRST</span></h2>
            <video muted src="Y2Mate.is - [AMV] Arcane - Bones (Imagine Dragons)-oGT3Z7fVNc0-720p-1657916432556.mp4" type="video/mp4" controls></video>
    </div>
</div>

<!-- end video section -->


<!-- footer section starts  -->

<section class="footer">

    <div class="footer-container">

        <div class="box-container">

            <div class="box">
                <h3>branch location</h3>
                <a href="#">Egypt</a>
                <a href="#">USA</a>
                <a href="#">france</a>
                <a href="#">russia</a>
                <a href="#">japan</a>
            </div> 
            
            <div class="box">
                <h3>quick links</h3>
                <a href="website.php">home</a>
                <a href="#">services</a>
                <a href="#">featured</a>
                <a href="#">agents</a>
                <a href="#">contact</a>
            </div> 

            <div class="box">
                <h3>extra links</h3>
                <a href="user_page.php">my account</a>
                <a href="#">my favorite</a>
                <a href="#">my list</a>
            </div> 

            <div class="box">
                <h3>follow us</h3>
                <a href="#">facebook</a>
                <a href="#">twitter</a>
                <a href="#">instagram</a>
                <a href="#">linkedin</a>
            </div> 

        </div>

        <div class="credit">instagram: <span> albaraa.sayed </span> | all rights reserved! </div>

    </div>

</section>

<!-- footer section ends -->







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