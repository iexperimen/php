<?php
$servername = "localhost"; // Customize your server
$username = "root"; // Customize your username
$password = ""; // Customize your password

/*
* Powered by iExperiment
* Please do not remove this
* 16 june 2022
*/

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['submit']) && $_GET['submit'] == 'SUCCESS') {
  // Make a string to push name db
  $myfirstDB = $_GET['myfirstDB'];

  // Create database
  $sql = "CREATE DATABASE $myfirstDB";
  if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
  } else {
    echo "Error creating database: " . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>

<form method="get">
  <input type="name" name="myfirstDB" required>
  <button type="submit" name="submit" value="SUCCESS">Submit</button>
</form>
