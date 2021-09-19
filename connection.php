<?php

  $servername = "127.0.0.1:3307";
  $username = "root";
  $password = "";
  $dbname = "dreamfuturebank";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if(!$conn){
    
    die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
  }
  

?>