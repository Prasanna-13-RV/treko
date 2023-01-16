<?php
$conn = mysqli_connect("sql109.epizy.com", "epiz_33389444", "ZtbMZj0c7mi", "epiz_33389444_treko"); //database connection  
//hostname, username, password, database name  
if (!$conn) {
    echo "Error";
}
//check database connect or not  
$query = "select * from booking";
$result = mysqli_query($conn, $query);
// $num = mysqli_num_rows($connect); //check in database any data have or not  
?>

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
    <link rel="stylesheet" href="../../css/booking_details.css">
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


    <div class="container">
        <table>
            <caption>Booking Details</caption>
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Location</th>
                    <th scope="col">No of Guests</th>
                    <th scope="col">Arriving Date</th>
                    <th scope="col">Leaving Date</th>
                </tr>
            </thead>
            <tbody>


                <?php while ($rows = mysqli_fetch_array($result)) {
                    $name = $rows['name'];
                    $email = $rows['email'];
                    $phone = $rows['phone'];
                    $address = $rows['address'];
                    $location = $rows['place'];
                    $guests = $rows['no_of_people'];
                    $arrivals = $rows['arrival_data'];
                    $leaving = $rows['leaving_date'];
                ?>
                    <tr>
                        <td data-label="Name"><?php echo "$name" ?></td>
                        <td data-label="Email"><?php echo "$email" ?></td>
                        <td data-label="Phone"><?php echo "$phone" ?></td>
                        <td data-label="Address"><?php echo "$address" ?></td>
                        <td data-label="Location"><?php echo "$location" ?></td>
                        <td data-label="No of Guests"><?php echo "$guests" ?></td>
                        <td data-label="Arriving Date"><?php echo "$arrivals" ?></td>
                        <td data-label="Leaving Date"><?php echo "$leaving" ?></td>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

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