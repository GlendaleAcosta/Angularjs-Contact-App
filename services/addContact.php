<?php

  include("dbconnection.php");

  if(isset($_GET['name'], $_GET['email'], $_GET['message'])) {

    $name = $_GET['name'];
    $email = $_GET['email'];
    $message = $_GET['message'];

    $update_query = "INSERT INTO contact_info(id, name, email, message)
    VALUES (NULL, '$name', '$email', '$message')";

    $result = mysqli_query($connection, $update_query) or die("Error in Selecting " . mysqli_error($connection));

    mysqli_close($connection);
  }




 ?>
