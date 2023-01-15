<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/style.css">

</head>

<style>
   .heading {
      position: relative;
      z-index: 1;
   }

   .heading::after {
      content: "";
      position: absolute;
      width: 100%;
      height: 10%;
      display: flex;
      bottom: 0;
      left: 0;
      background: linear-gradient(transparent, #ffff);
      z-index: 3;
   }
</style>


<body>

   <!-- header section starts  -->

   <section class="header">
      <a href="home.php" class="logo">Treko</a>
      <nav class="navbar">
         <a href="../home.php">Home</a>
         <a href="about.php">About</a>
         <a href="package.php">Package</a>
         <a href="book.php">Bookings</a>
      </nav>
      <div id="menu-btn" class="fas fa-bars"></div>
   </section>

   <!-- header section ends -->

   <!-- <div class="heading" style="background:url(../images/header-bg-1.png) no-repeat"> -->
   <div class="heading" style="background:url('https://images.unsplash.com/photo-1476067897447-d0c5df27b5df?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8d2F5fGVufDB8fDB8fA%3D%3D&w=1000&q=80') no-repeat">
      <h1>about us</h1>
   </div>

   <!-- about section starts  -->

   <section class="about">

      <div class="image">
         <img src="../images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure numquam nulla iusto corporis dolor commodi libero, vitae obcaecati optio rerum ab culpa nesciunt, earum mollitia quasi ipsam non. Aliquid, iure.</p>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid rerum, delectus voluptate aliquam quaerat iusto repellendus error nulla ab atque.</p>
         <div class="icons-container">
            <div class="icons">
               <i class="fas fa-map"></i>
               <span>top destinations</span>
            </div>
            <div class="icons">
               <i class="fas fa-hand-holding-usd"></i>
               <span>affordable price</span>
            </div>
            <div class="icons">
               <i class="fas fa-headset"></i>
               <span>24/7 guide service</span>
            </div>
         </div>
      </div>

   </section>

   <!-- about section ends -->

   <!-- reviews section starts  -->

   <section class="reviews">

      <h1 class="heading-title"> clients reviews </h1>

      <div class="swiper reviews-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui distinctio possimus?</p>
               <h3>john deo</h3>
               <span>traveler</span>
               <img src="../images/pic-1.png" alt="">
            </div>

            <div class="swiper-slide slide">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus repellendus et suscipit optio similique totam aut laborum ullam sequi! In!</p>
               <h3>john deo</h3>
               <span>traveler</span>
               <img src="../images/pic-2.png" alt="">
            </div>

            <div class="swiper-slide slide">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus enim deserunt, ab at ea iste odio placeat doloribus eum dolores tempore obcaecati, dolore esse aperiam. Excepturi ad quo distinctio, dignissimos voluptate, dolores, saepe animi eum atque sint esse ab exercitationem!</p>
               <h3>john deo</h3>
               <span>traveler</span>
               <img src="../images/pic-3.png" alt="">
            </div>

            <div class="swiper-slide slide">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus recusandae cum quibusdam odio dignissimos nemo?</p>
               <h3>john deo</h3>
               <span>traveler</span>
               <img src="../images/pic-4.png" alt="">
            </div>

            <div class="swiper-slide slide">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui distinctio possimus?</p>
               <h3>john deo</h3>
               <span>traveler</span>
               <img src="../images/pic-5.png" alt="">
            </div>

            <div class="swiper-slide slide">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui distinctio possimus?</p>
               <h3>john deo</h3>
               <span>traveler</span>
               <img src="../images/pic-6.png" alt="">
            </div>

         </div>

      </div>

   </section>

   <!-- reviews section ends -->


   <!-- footer section starts  -->

   <footer style="
      width: 100%;
      height: 80px;
      background: #1e1e1e;
      color: white;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      font-size: 1.5rem;">
      <p>&#169; Copyrights : Treko</p>
   </footer>

   <!-- footer section ends -->


   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="../js/script.js"></script>

</body>

</html>