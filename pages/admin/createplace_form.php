<?php

$conn = mysqli_connect("sql109.epizy.com", "epiz_33389444", "ZtbMZj0c7mi", "epiz_33389444_treko");

if (isset($_POST['send'])) {
   $place_name = $_POST['place_name'];
   $description = $_POST['description'];

   $request = " insert into create_place(place_name ,description) values('$place_name', '$description') ";
   mysqli_query($connection, $request);

   header('location:createplace.php');
} else {
   echo 'something went wrong please try again!';
}
