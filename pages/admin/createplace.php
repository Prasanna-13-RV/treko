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
   <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
   <!-- header section starts  -->
   <section class="header">
      <a href="../../index.php" class="logo">Treko</a>
      <nav class="navbar">
         <a href="../../index.php">home</a>
         <a href="../about.php">about</a>
         <a href="../package.php">package</a>
         <a href="../book.php">book</a>
      </nav>
      <div id="menu-btn" class="fas fa-bars"></div>
   </section>

   <!-- header section ends -->

   <!-- create place section starts  -->

   <section class="booking">

      <h1 class="heading-title">Create Place</h1>
      <form action="createplace_form.php" method="post" class="bookForm">
         <div class="flex">
            <div class="inputBox">
               <span>Place Name :</span>
               <input type="text" placeholder="Enter Your Place Name" name="place_name">
            </div>
            <div class="inputBox">
               <span>Description :</span>
               <textarea name="description" id="description" placeholder="Enter Your Place Description"></textarea>
            </div>
            <input type="submit" value="submit" class="btn" name="send">
         </div>
      </form>
   </section>

   <!-- create place section ends -->

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