<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <!-- font awesome cnd link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="layout/style.css">
  </head>
  <body>

    <!-- header section starts -->
    <section class="header">
      <a href="index.php" class="logo">Nature</a>

      <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
        <a href="book.php">Book</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

    </section>
    <!-- header section ends -->

    <div class="heading" style="background: url(../Course-Project/Media/Images/header-bg-3.png) no-repeat;">
      <h1>book now</h1>
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






    <!-- footer section starts -->
    <section class="footer">
      <div class="box-container">

        <div class="box">
          <h3>quick links</h3>
          <a href="index.php"> <i class="fas fa-angle-right"></i>Home</a>
          <a href="about.php"> <i class="fas fa-angle-right"></i>About</a>
          <a href="package.php"> <i class="fas fa-angle-right"></i>Package</a>
          <a href="book.php"> <i class="fas fa-angle-right"></i>Book</a>
        </div>

        <div class="box">
          <h3>extra links</h3>
          <a href="#"> <i class="fas fa-angle-right"></i>ask questions</a>
          <a href="#"> <i class="fas fa-angle-right"></i>about us</a>
          <a href="#"> <i class="fas fa-angle-right"></i>privacy policy</a>
          <a href="#"> <i class="fas fa-angle-right"></i>terms of use</a>
        </div>

        <div class="box">
          <h3>contact info</h3>
          <a href="#"> <i class="fas fa-phone"></i>+353-81-345-4545</a>
          <a href="#"> <i class="fas fa-phone"></i>+353-81-678-8888</a>
          <a href="#"> <i class="fas fa-envelope"></i>email@gmail.com</a>
          <a href="#"> <i class="fas fa-map"></i>Dublin, Ireland</a>
        </div>

        <div class="box">
          <h3>follow us</h3>
          <a href="#"> <i class="fab fa-facebook-f"></i>Facebook</a>
          <a href="#"> <i class="fab fa-twitter"></i>Twitter</a>
          <a href="#"> <i class="fab fa-instagram"></i>Instagram</a>
          <a href="#"> <i class="fab fa-linkedin"></i>Linkedin</a>
        </div>

      </div>

      <div class="credit">created by <span>Felicia Fratescu</span> | with love!</div>
    </section>
    <!-- footer section ends -->

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="layout/index.js"></script>
  </body>
</html>