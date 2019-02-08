<?php

  session_start();

  $mysqli = new mysqli('localhost', 'root', 'root', 'merch') or die(mysqli_error($mysqli));

  $id = 0;
  $update = false;
  $venue = '';
  $city = '';
  $ticketLink = '';


  if (isset($_POST['create'])) {
    $date = $_POST['date'];
    $venue = $_POST['venue'];
    $city = $_POST['city'];
    $ticketLink = $_POST['url'];

    $mysqli->query("INSERT INTO shows (date, venue, city, ticketLink) VALUES ('$date', '$venue', '$city', '$ticketLink')") or
      die($mysqli->error);

    $_SESSION['message'] = "A new show has been added.";
    $_SESSION['msg_type'] = "success";

    header("location: index.php");
  }

  if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM shows WHERE id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Show has been deleted";
    $_SESSION['msg_type'] = "danger";

    header("location: index.php");
  }

  if (isset($_GET['edit'])){
    $id=$_GET['edit'];
    $update = true;
    $result=$mysqli->query("SELECT * FROM shows WHERE id=$id") or die($mysql->error());
    if (count($result)==1){
      $row = $result->fetch_array();
      $date = $row['date'];
      $venue = $row['venue'];
      $city = $row['city'];
      $ticketLink = $row['ticketLink'];
    }
  }

  if (isset($_POST['update'])){
    $id = $_POST['id'];
    $date = $_POST['date'];
    $venue = $_POST['venue'];
    $city = $_POST['city'];
    $ticketLink = $_POST['url'];

    $mysqli->query("UPDATE shows SET date = '$date', venue='$venue', city='$city', ticketLink='$ticketLink' WHERE id=$id") or
      die($mysqli->error);

    $_SESSION['message'] = "Show has been updated";
    $_SESSION['msg_type'] = "warning";

    header("location: index.php");
  }
?>
