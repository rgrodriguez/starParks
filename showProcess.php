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

  $date = $_POST['date'];
  $venue = $_POST['venue'];
  $city = $_POST['city'];
  $ticketLink = $_POST['ticketLink'];

  $sql = "INSERT INTO shows (date, venue, city, ticketLink) VALUES ('$date', '$venue', '$city', '$ticketLink')";

  if ($conn->query($sql) === TRUE) {
    header("Refresh:0; url=login.php");
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

if (isset($_GET['delete'])){
  $id = $_GET['delete'];
  $sql = "DELETE FROM shows WHERE id=$id";
  if ($conn->query($sql) === TRUE) {
    header("Refresh:0; url=login.php");
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

if (isset($_GET['edit'])){
  $id = $_GET['id'];
  $sql = "SELECT * FROM shows WHERE id=$id";
  if (count($result)==1){
    $row = $result->mysqli_fetch_array();
    $date = $row['date'];
    $venue = $row['venue'];
    $city = $row['city'];
  }
  if ($conn->query($sql) === TRUE) {
    header("Refresh:0; url=login.php");
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}


  $conn->close();

?>
