<?php

  include("dbconnection.php");

  $data_query = "SELECT * FROM contact_info";
  $result = mysqli_query($connection, $data_query) or die("Error in Selecting " . mysqli_error($connection));


  $contacts = array();

  while($row = mysqli_fetch_assoc($result))
  {
      $contacts[] = $row;
  }


  echo json_encode($contacts);




  mysqli_close($connection);

 ?>
