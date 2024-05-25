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
        <a href="login_form.php" class="fas fa-user"></a>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <form action="">

        <h3>find your perfect home</h3>

        <div class="buttons-container">
            <a href="#" class="btn">for rent</a>
            <a href="#" class="btn">for sell</a>
        </div>

        <div class="inputBox">
            <input type="search" name="" placeholder="neighborhood" id="">
            <input type="search" name="" placeholder="city" id="">
            <select name="" id="">
                <option value="" disabled hidden selected>minimum price</option>
                <option value="$5000">$5000</option>
                <option value="$10000">$10000</option>
                <option value="$15000">$15000</option>
                <option value="$20000">$20000</option>
                <option value="$25000">$25000</option>
            </select>
            <select name="" id="">
                <option value="" disabled hidden selected>maximum price</option>
                <option value="$30000">$30000</option>
                <option value="$35000">$35000</option>
                <option value="$40000">$40000</option>
                <option value="$45000">$45000</option>
                <option value="$50000">$50000</option>
            </select>
            <select name="" id="">
                <option value="" disabled hidden selected>property status</option>
                <option value="Ready To Move">Ready To Move</option>
                <option value="under construction">under construction</option>
                <option value="furnished">furnished</option>
                <option value="semi-furnished">semi-furnished</option>
                <option value="unfurnished">unfurnished</option>
            </select>
            <select name="" id="">
                <option value="" disabled hidden selected>property type</option>
                <option value="flat">flat</option>
                <option value="house">house</option>
                <option value="shop">shop</option>
                <option value="warehouse">warehouse</option>
                <option value="land">land</option>
            </select>
            <select name="" id="">
                <option value="" disabled hidden selected>BHK</option>
                <option value="1 BHK">1 BHK</option>
                <option value="2 BHK">2 BHK</option>
                <option value="3 BHK">3 BHK</option>
                <option value="4 BHK">4 BHK</option>
                <option value="5 BHK">5 BHK</option>
            </select>
            <select name="" id="">
                <option value="" disabled hidden selected>aminities</option>
                <option value="parking space">parking space</option>
                <option value="swimming pool">swimming pool</option>
                <option value="playground">playground</option>
                <option value="security">security</option>
                <option value="all">all</option>
            </select>
            <select name="" id="">
                <option value="" disabled hidden selected>bedrooms</option>
                <option value="1 bedroom">1 bedroom</option>
                <option value="2 bedroom">2 bedroom</option>
                <option value="3 bedroom">3 bedroom</option>
                <option value="4 bedroom">4 bedroom</option>
                <option value="5 bedroom">5 bedroom</option>
            </select>
            <select name="" id="">
                <option value="" disabled hidden selected>bathrooms</option>
                <option value="1 bathroom">1 bathroom</option>
                <option value="2 bathroom">2 bathroom</option>
                <option value="3 bathroom">3 bedroom</option>
                <option value="4 bathroom">4 bathroom</option>
                <option value="5 bathroom">5 bathroom</option>
            </select>
        </div>

        <input type="submit" value="search property" class="btn">

    </form>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/s-1.png" alt="">
            <h3>buying home</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam distinctio ipsa ab cum error quas fuga ad? Perspiciatis, autem officiis?</p>
            <a href="learnmore.php" class="btn">learn more</a>
        </div>

        <div class="box">
            <img src="images/s-2.png" alt="">
            <h3>renting home</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam distinctio ipsa ab cum error quas fuga ad? Perspiciatis, autem officiis?</p>
            <a href="learnmore.php" class="btn">learn more</a>
        </div>

        <div class="box">
            <img src="images/s-3.png" alt="">
            <h3>selling home</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam distinctio ipsa ab cum error quas fuga ad? Perspiciatis, autem officiis?</p>
            <a href="learnmore.php" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- featured section starts  -->

<section class="featured" id="featured">

    <h1 class="heading"> <span>featured</span> properties </h1>

    <div class="box-container">

        <div class="box">
            <div class="image-container">
                <img src="images/img-1.jpg" alt="">
                <div class="info">
                    <h3>3 days ago</h3>
                    <h3>for rent</h3>
                </div>
                <div class="icons">
                    <a href="#" class="fas fa-film"><h3>1</h3></a>
                    <a href="#" class="fas fa-camera"><h3>4</h3></a>
                </div>
            </div>
            <div class="content">
                <div class="price">
                    <h3>$25,000/mo</h3>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-envelope"></a>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>modern apartments</h3>
                    <p>sidi bishr, alexandria, Egypt - 000001</p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                    <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                    <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                </div>
                <div class="buttons">
                    <a href="#" class="btn">request info</a>
                    <a href="#" class="btn">view details</a>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image-container">
                <img src="images/img-2.jpg" alt="">
                <div class="info">
                    <h3>6 days ago</h3>
                    <h3>for sell</h3>
                </div>
                <div class="icons">
                    <a href="#" class="fas fa-film"><h3>2</h3></a>
                    <a href="#" class="fas fa-camera"><h3>7</h3></a>
                </div>
            </div>
            <div class="content">
                <div class="price">
                    <h3>$25,000/mo</h3>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-envelope"></a>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>modern apartments</h3>
                    <p>sidi bishr, alexandria, Egypt - 000001</p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                    <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                    <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                </div>
                <div class="buttons">
                    <a href="#" class="btn">request info</a>
                    <a href="#" class="btn">view details</a>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image-container">
                <img src="images/img-3.jpg" alt="">
                <div class="info">
                    <h3>1 days ago</h3>
                    <h3>for rent</h3>
                </div>
                <div class="icons">
                    <a href="#" class="fas fa-film"><h3>1</h3></a>
                    <a href="#" class="fas fa-camera"><h3>6</h3></a>
                </div>
            </div>
            <div class="content">
                <div class="price">
                    <h3>$25,000/mo</h3>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-envelope"></a>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>modern apartments</h3>
                    <p>sidi bishr, alexandria, Egypt - 000001</p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                    <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                    <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                </div>
                <div class="buttons">
                    <a href="#" class="btn">request info</a>
                    <a href="#" class="btn">view details</a>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image-container">
                <img src="images/img-4.jpg" alt="">
                <div class="info">
                    <h3>9 days ago</h3>
                    <h3>for rent</h3>
                </div>
                <div class="icons">
                    <a href="#" class="fas fa-film"><h3>2</h3></a>
                    <a href="#" class="fas fa-camera"><h3>6</h3></a>
                </div>
            </div>
            <div class="content">
                <div class="price">
                    <h3>$25,000/mo</h3>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-envelope"></a>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>modern apartments</h3>
                    <p>sidi bishr, alexandria, Egypt - 000001</p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                    <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                    <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                </div>
                <div class="buttons">
                    <a href="#" class="btn">request info</a>
                    <a href="#" class="btn">view details</a>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image-container">
                <img src="images/img-5.jpg" alt="">
                <div class="info">
                    <h3>10 days ago</h3>
                    <h3>for sell</h3>
                </div>
                <div class="icons">
                    <a href="#" class="fas fa-film"><h3>3</h3></a>
                    <a href="#" class="fas fa-camera"><h3>8</h3></a>
                </div>
            </div>
            <div class="content">
                <div class="price">
                    <h3>$25,000/mo</h3>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-envelope"></a>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>modern apartments</h3>
                    <p>sidi bishr, alexandria, Egypt - 000001</p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                    <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                    <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                </div>
                <div class="buttons">
                    <a href="#" class="btn">request info</a>
                    <a href="#" class="btn">view details</a>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image-container">
                <img src="images/img-6.jpg" alt="">
                <div class="info">
                    <h3>3 days ago</h3>
                    <h3>for sell</h3>
                </div>
                <div class="icons">
                    <a href="#" class="fas fa-film"><h3>1</h3></a>
                    <a href="#" class="fas fa-camera"><h3>4</h3></a>
                </div>
            </div>
            <div class="content">
                <div class="price">
                    <h3>$25,000/mo</h3>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-envelope"></a>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>modern apartments</h3>
                    <p>sidi bishr, alexandria, Egypt - 000001</p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                    <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                    <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                </div>
                <div class="buttons">
                    <a href="#" class="btn">request info</a>
                    <a href="#" class="btn">view details</a>
                </div>
            </div>
        </div>

    </div>
    
</section>

<!-- featured section ends -->

<!-- agents section starts  -->

<section class="agents" id="agents">

    <h1 class="heading"> professional <span>agents</span> </h1>

    <div class="box-container">

        <div class="box">
            <a href="#" class="fas fa-envelope"></a>
            <a href="#" class="fas fa-phone"></a>
            <img src="images/pic-1.png" alt="">
            <h3>Mohammed</h3>
            <span>agent</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <a href="#" class="fas fa-envelope"></a>
            <a href="#" class="fas fa-phone"></a>
            <img src="images/pic-2.png" alt="">
            <h3>sara</h3>
            <span>agent</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <a href="#" class="fas fa-envelope"></a>
            <a href="#" class="fas fa-phone"></a>
            <img src="images/pic-3.png" alt="">
            <h3>albaraa</h3>
            <span>agent</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <a href="#" class="fas fa-envelope"></a>
            <a href="#" class="fas fa-phone"></a>
            <img src="images/pic-4.png" alt="">
            <h3>jana</h3>
            <span>agent</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

    </div>

</section>

<!-- agents section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading"> <span>contact</span> us </h1>

<div class="icons-container">

    <div class="icons">
        <img src="images/icon-1.png" alt="">
        <h3>phone number</h3>
        <p>+20 128 450 3080</p>
        <p>+20 106 342 7972</p>
    </div>

    <div class="icons">
        <img src="images/icon-2.png" alt="">
        <h3>email address</h3>
        <p>albaraAalsayed@gmail.com</p>
        <p>MazenSalah@gmail.com</p>
    </div>

     <div class="icons">
        <img src="images/icon-3.png" alt="">
        <h3>office address</h3>
        <p>sidi bishr, alexandria, Egypt - 000001</p>
    </div>

</div>

<div class="row">

    <form action="">
        <div class="inputBox">
            <input type="text" placeholder="name">
            <input type="number" placeholder="number">
        </div>
        <div class="inputBox">
            <input type="email" placeholder="email">
            <input type="text" placeholder="subject">
        </div>
        <textarea name="" placeholder="message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
    </form>

    

</div>

</section>

<!-- contact section ends -->

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
                <a href="#">home</a>
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