<?php

$connection = mysqli_connect('localhost', 'root', '', 'treko');

if (isset($_POST['send'])) {
   $place_name = $_POST['place_name'];
   $description = $_POST['description'];

   $request = " insert into create_place(place_name ,description) values('$place_name', '$description') ";
   mysqli_query($connection, $request);

   header('location:createplace.php');
} else {
   echo 'something went wrong please try again!';
}
