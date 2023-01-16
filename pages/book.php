<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

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

   .heading h1 {
      z-index: 5;
   }

   .heading::before {
      content: "";
      position: absolute;
      width: 100%;
      height: 100%;
      display: flex;
      top: 0;
      left: 0;
      background: rgba(0, 0, 0, 0.3);
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
      <a href="index.php" class="logo">Treko</a>
      <nav class="navbar">
         <a href="../index.php">Home</a>
         <a href="about.php">About</a>
         <a href="package.php">Package</a>
         <a href="book.php">Bookings</a>
      </nav>
      <div id="menu-btn" class="fas fa-bars"></div>
   </section>

   <!-- header section ends -->

   <div class="heading" style="background:url('https://media.istockphoto.com/id/178447404/photo/modern-business-buildings.jpg?s=612x612&w=0&k=20&c=MOG9lvRz7WjsVyW3IiQ0srEzpaBPDcc7qxYsBCvAUJs=') no-repeat">
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
               <input type="text" placeholder="place you want to visit" name="place">
            </div>
            <div class="inputBox">
               <span>how many :</span>
               <input type="number" placeholder="number of guests" name="no_of_people">
            </div>
            <div class="inputBox">
               <span>arrivals :</span>
               <input type="date" name="arrival_data">
            </div>
            <div class="inputBox">
               <span>leaving :</span>
               <input type="date" name="leaving_date">
            </div>
         </div>
         <input type="submit" value="submit" class="btn" name="send">
      </form>
   </section>

   <!-- booking section ends -->

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