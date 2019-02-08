<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "merch";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];

  $sql = "INSERT INTO newsletter (firstName, lastName, email) VALUES ('$firstName', '$lastName', '$email')";

  if ($conn->query($sql) === TRUE) {
    header("Refresh:0; url=shows.php");
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();

?>
