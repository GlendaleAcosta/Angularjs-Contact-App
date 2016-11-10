<?php

  $server = "localhost";
  $username = "root";
  $password = "root";
  $database = "contact_app_1";

  $connection = mysqli_connect($server, $username, $password, $database);

  if(!$connection) {
    die("Connection failed: " . mysqli_connect_error($connection));
  } else {
    // echo "Database Connection Successful!";
  }






 ?>
