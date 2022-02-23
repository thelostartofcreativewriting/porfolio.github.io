<?php

$username = "root";
$errors = array(); 


$db = mysqli_connect('localhost', 'root', 'lancegabriel@04', 'kevin');



if (isset($_POST['create'])) {
 
  $username = mysqli_real_escape_string($db, $_POST['name']);
  $password_1 = mysqli_real_escape_string($db, $_POST['lastname']);

 
  if (count($errors) == 0) {
    $password = ($password_1);

    $query = "INSERT INTO voters (name, lastname) 
          VALUES('$username', '$password')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: client.php');
  }
} 

?>

