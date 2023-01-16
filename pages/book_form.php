<?php

$conn = mysqli_connect("sql109.epizy.com", "epiz_33389444", "ZtbMZj0c7mi", "epiz_33389444_treko");

if (isset($_POST['send'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $location = $_POST['place'];
   $guests = $_POST['no_of_people'];
   $arrivals = $_POST['arrival_data'];
   $leaving = $_POST['leaving_date'];

   $request = " insert into booking(name, email, phone, address, place, no_of_people, arrival_data, leaving_date) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
   mysqli_query($connection, $request);

   header('location:book.php');
} else {
   echo 'something went wrong please try again!';
}
