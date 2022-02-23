<?php
  require('db.php');

  // $query = "SELECT FROM voters (id, name, lastname)";
  $query = "SELECT id, name, lastname, date FROM voters";
  $sqlaccounts = mysqli_query($db, $query);
?>