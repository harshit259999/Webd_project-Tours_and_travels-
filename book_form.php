<?php

   $connection = mysqli_connect('localhost','root','','ust');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      $request = " insert into trip(name, email, ph, addr, loc, guests, arri, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
      mysqli_query($connection, $request);
      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>