<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <!-- header section starts  -->

   <section class="header">

      <a href="home.php" class="logo">Treko</a>

      <nav class="navbar">
         <a href="home.php">Home</a>
         <a href="./pages/about.php">About</a>
         <a href="./pages/package.php">Package</a>
         <a href="./pages/book.php">Bookings</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

   <!-- header section ends -->

   <!-- home section starts  -->

   <section class="home">
      <div class="swiper home-slider">
         <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url('https://www.schengenvisainfo.com/news/wp-content/uploads/2022/03/Travel-to-Paris-Europe-tour-woman-with-suitcase-near-Eiffel-Tower-France.jpg') no-repeat">
               <div class="content">
                  <span>Explore, Discover, Travel</span>
                  <h3>Travel Around The World</h3>
                  <a href="./pages/package.php" class="btn">Discover More</a>
               </div>
            </div>
            <div class="swiper-slide slide" style="background:url('https://img.etimg.com/thumb/width-1200,height-900,imgsize-82458,resizemode-1,msid-92132769/nri/visit/travelling-to-the-us-you-will-no-longer-need-to-take-a-covid-test-before-you-board-your-flight.jpg') no-repeat">
               <div class="content">
                  <span>explore, discover, travel</span>
                  <h3>discover the new places</h3>
                  <a href="package.php" class="btn">discover more</a>
               </div>
            </div>
            <div class="swiper-slide slide" style="background:url('https://static.toiimg.com/photo/msid-96457229,width-96,height-65.cms') no-repeat">
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

   <!-- home section ends -->

   <!-- home about section starts  -->

   <section class="home-about">

      <div class="image">
         <img src="https://149647997.v2.pressablecdn.com/wp-content/uploads/2019/01/DSC04903.jpg.webp" alt="">
      </div>

      <div class="content">
         <h3>About us</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et, recusandae nobis fugit modi quibusdam ea assumenda, nulla quisquam repellat rem aliquid sequi maxime sapiente autem ipsum? Nobis, provident voluptate?</p>
         <a href="about.php" class="btn">read more</a>
      </div>

   </section>

   <!-- home about section ends -->

   <!-- home packages section starts  -->

   <section class="home-packages">

      <h1 class="heading-title"> our packages </h1>

      <div class="box-container">

         <div class="box">
            <div class="image">
               <img src="images/img-1.jpg" alt="">
            </div>
            <div class="content">
               <h3>Adventure & Tour</h3>
               <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/img-2.jpg" alt="">
            </div>
            <div class="content">
               <h3>Happy Living</h3>
               <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/img-3.jpg" alt="">
            </div>
            <div class="content">
               <h3>Smart Travelling</h3>
               <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

      </div>

      <div class="load-more"> <a href="./pages/package.php" class="btn">load more</a> </div>

   </section>

   <!-- home packages section ends -->

   <!-- home offer section starts  -->

   <section class="home-offer">
      <div class="content">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora assumenda, debitis aliquid nesciunt maiores quas! Magni cumque quaerat saepe!</p>
         <a href="book.php" class="btn">book now</a>
      </div>
   </section>

   <!-- home offer section ends -->



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
   <script src="js/script.js"></script>

</body>

</html>