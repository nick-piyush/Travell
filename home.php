<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travell</title>

    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gantari:wght@200&family=Poppins:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>


</head>


<body>
    
<!-- -------------Header Section---------------------------------------- -->
    <section class="header">
        <a href="home.php" class="logo">Travell</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>

        <div id="menu-btn" class="fa-solid fa-bars">
        </div>
    </section>


    <!-- --------------Home section -------------------- -->

    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat ;">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat ;">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>discover the new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat ;">
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


    <!-- ---------Services section-------------->

    <section class="services">
        <h1 class="heading-title">Our Services</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/icon-1.png" alt="">
                <h3>Adventure</h3>
            </div>

            <div class="box">
                <img src="images/icon-2.png" alt="">
                <h3>Tour guide</h3>
            </div>

            <div class="box">
                <img src="images/icon-3.png" alt="">
                <h3>Trekking</h3>
            </div>

            <div class="box">
                <img src="images/icon-4.png" alt="">
                <h3>camp fire</h3>
            </div>

            <div class="box">
                <img src="images/icon-5.png" alt="">
                <h3>off road</h3>
            </div>

            <div class="box">
                <img src="images/icon-6.png" alt="">
                <h3>camping</h3>
            </div>
        </div>

    </section>



    <!-- --------------------Home about------------------------------------ -->

    <section class="home-about">
        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores culpa consequuntur fuga sapiente modi quod, facere harum. Alias ducimus tempora a hic aut Lorem ipsum dolor sit amet.
            </p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>



<!-- ----------------Home Packages------------------------------- -->

<section class="home-packages">
    <h1 class="heading-title">our packages</h1>

    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="images/img-1.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor dignissimos.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img-2.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor dignissimos.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img-3.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor dignissimos.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
    </div>


    <div class="load-more"><a href="package.php"  class="btn">load more</a></div>

</section>


    <!-- ----------------Home Offeer---------------------- -->

    <section class="home-offer">
        <div class="content">
            <h3>upto <span>50%</span> off</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam consequuntur inventore totam, aut voluptate labore.
            </p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </section>



<!-- ---------------------Footer Section--------------------------->

    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i>Home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i>About</a>
                <a href="package.php"> <i class="fas fa-angle-right"></i>Package</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i>Book</a>
            </div>

            <div class="box">
                <h3>Extra links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i>Ask Question</a>
                <a href="#"> <i class="fas fa-angle-right"></i>About Us</a>
                <a href="#"> <i class="fas fa-angle-right"></i>Privacy Policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i>Terms of use</a>
            </div>

            <div class="box">
                <h3>Contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i>+123-456-7890</a>
                <a href="#"> <i class="fas fa-phone"></i>+111-222-3333</a>
                <a href="#"> <i class="fas fa-envelope"></i>atishk101@gmail.com</a>
                <a href="#"> <i class="fas fa-map"></i>Maheshtala,Kolkata-700142</a>
                
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i>Atish Singh</a>
                <a href="#"> <i class="fab fa-twitter"></i>@_nick_piyush</a>
                <a href="#"> <i class="fab fa-instagram"></i>@_nick_piyush</a>
                <a href="#"> <i class="fab fa-linkedin"></i>Atish Singh</a>
                
            </div>


        </div>

        <div class="credit">Created by <span>_nick_piyush</span> | All rigths reserved</div>


    </section>






    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script src="https://kit.fontawesome.com/590ab34b61.js" crossorigin="anonymous"></script>

    <script src="script.js"></script>

</body>
</html>