<?php
$conn = mysqli_connect("sql109.epizy.com", "epiz_33389444", "ZtbMZj0c7mi", "epiz_33389444_treko"); //database connection  
//hostname, username, password, database name  
if (!$conn) {
   echo "Error";
}
//check database connect or not  
$query = "select * from create_place";
$result = mysqli_query($conn, $query);
// $num = mysqli_num_rows($connect); //check in database any data have or not  
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>package</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/style.css">
   <!-- <link rel="stylesheet" href="../css/footer.css"> -->

</head>

<style>
   .heading {
      position: relative;
      z-index: 1;
   }

   .heading h1 {
      z-index: 5;
   }

   /* .heading::before {
      content: "";
      position: absolute;
      width: 100%;
      height: 100%;
      display: flex;
      top: 0;
      left: 0;
      background: rgba(0, 0, 0, 0.3);
      z-index: 1;
   } */

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

   <div class="heading" style="background:url('https://www.iwmbuzz.com/wp-content/uploads/2021/08/6-mental-health-benefits-of-travelling-see-here.jpeg') no-repeat">
      <h1>packages</h1>
   </div>

   <!-- packages section starts  -->

   <section class="packages">

      <h1 class="heading-title">top destinations</h1>

      <div class="box-container">

         <?php while ($rows = mysqli_fetch_array($result)) {

            $place_name = $rows['place_name'];
            $description = $rows['description'];
         ?>

            <div class="box">
               <div class="image">
                  <img src="../images/img-1.jpg" alt="">
               </div>
               <div class="content">
                  <h3><?php echo "$place_name" ?></h3>
                  <p><?php echo "$description" ?></p>
                  <a href="book.php" class="btn">book now</a>
               </div>
            </div>

         <?php
         }
         ?>

      </div>

      <div class="load-more"><span class="btn">load more</span></div>

   </section>

   <!-- packages section ends -->


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