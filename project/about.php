<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>we are the leading company with the highest number of partnership with the top brands.
            We help you surprise your loved ones with gift cards of their favourite brands.
</p>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">customer reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images\pic-11.jpg" alt="">
         <p>brought a gift card worth rupees 500 for a discounted price of 300. This website has the best offers on the best giftcards. Highly recommended.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Akash Roshan</h3>
      </div>

      <div class="box">
         <img src="images/pic-22.png" alt="">
         <p>this website has the best offers on the most popular gift cards. great to see such great offers on such good gift cards. Happy to use this. will definitely recommended.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Chandu Kumar</h3>
      </div>

      <div class="box">
         <img src="images/pic-33.png" alt="">
         <p>the best online store to get giftcards at the best prices and great discounts. 
            Happy with the customer service and the feedbacks don't lie. will pakka recommend others.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Fufu shariff</h3>
      </div>

<!--      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>-->

   </div>

</section>

<section class="authors">

   <h1 class="title">Our Partners</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/myntra.png" alt="">
         <div class="share">
            <a href="https://www.facebook.com/myntra/" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/myntra?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/myntra/?hl=en&__coig_restricted=1" class="fab fa-instagram"></a>
            <!--<a href="#" class="fab fa-linkedin"></a>-->
         </div>
         <h3>MYNTRA</h3>
      </div>

      <div class="box">
         <img src="images/amazon.jpg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/Amazon/" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/amazonin" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/amazon/?hl=en" class="fab fa-instagram"></a>
            <!--<a href="#" class="fab fa-linkedin"></a>-->
         </div>
         <h3>AMAZON</h3>
      </div>

      <div class="box">
         <img src="images/flipkart.png" alt="">
         <div class="share">
            <a href="https://www.facebook.com/flipkart/" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/Flipkart?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/flipkart/?hl=en" class="fab fa-instagram"></a>
            <!--<a href="#" class="fab fa-linkedin"></a>-->
         </div>
         <h3>FLIPKART</h3>
      </div>

<!--     <div class="box">
         <img src="images/author-4.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/author-5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/author-6.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>-->

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>