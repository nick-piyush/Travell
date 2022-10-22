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

    <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
        <h1>Book now</h1>
    </div>

<!-- ---------------Booking-------------------------------- -->

<section class="booking">
    <h1 class="heading-title">book your trip</h1>
    <form action="book_form.php" method="post" class="book_form">
        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="Enter your name" name="name">
            </div>

            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="Enter your email" name="email">
            </div>

            <div class="inputBox">
                <span>phone :</span>
                <input type="phone" placeholder="Enter your number" name="phone">
            </div>

            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="Enter your address" name="address">
            </div>

            <div class="inputBox">
                <span>where to :</span>
                <input type="text" placeholder="Place you want to visit" name="location">
            </div>

            <div class="inputBox">
                <span>how many :</span>
                <input type="number" placeholder="number of guests" name="guests">
            </div>

            <div class="inputBox">
                <span>arrival :</span>
                <input type="date" name="arrival">
            </div>

            <div class="inputBox">
                <span>leaving :</span>
                <input type="date" name="leaving">
            </div>

        </div>

        <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>
    






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

    <script src="https://kit.fontawesome.com/590ab34b61.js" crossorigin="anonymous"></script>

    <script src="script.js"></script>

</body>
</html>