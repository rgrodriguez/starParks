<?php

  session_start();

  $mysqli = new mysqli('localhost', 'root', 'root', 'merch') or die(mysqli_error($mysqli));

  $id = 0;
  $update = false;
  $firstName = '';
  $lastName = '';
  $email = '';


  if (isset($_POST['create'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];

    $mysqli->query("INSERT INTO newsletter (firstName, lastName, email) VALUES ('$firstName', '$lastName', '$email')") or
      die($mysqli->error);

    $_SESSION['message'] = "A new subscriber has been added.";
    $_SESSION['msg_type'] = "success";

    header("location: nlIndex.php");
  }

  if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM newsletter WHERE id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Subscriber has been deleted";
    $_SESSION['msg_type'] = "danger";

    header("location: nlIndex.php");
  }

  if (isset($_GET['edit'])){
    $id=$_GET['edit'];
    $update = true;
    $result=$mysqli->query("SELECT * FROM newsletter WHERE id=$id") or die($mysql->error());
    if (count($result)==1){
      $row = $result->fetch_array();
      $firstName = $row['firstName'];
      $lastName = $row['lastName'];
      $email = $row['email'];
    }
  }

  if (isset($_POST['update'])){
    $id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];

    $mysqli->query("UPDATE newsletter SET firstName = '$firstName', lastName='$lastName', email='$email' WHERE id=$id") or
      die($mysqli->error);

    $_SESSION['message'] = "Subscription has been updated";
    $_SESSION['msg_type'] = "warning";

    header("location: nlIndex.php");
  }
?>
