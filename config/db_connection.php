<?php 

  // connect to db
  $conn = mysqli_connect('localhost', 'rick', 'test123', 'PerfectPizza');
  // check the connection

  if (!$conn) {
    echo 'Connection Error! ' . mysqli_connect_error();
  }

?>