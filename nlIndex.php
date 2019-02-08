<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">

  <title>Star Parks</title>
  <link rel="shortcut icon" href="srcs/starLogoTest.png" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <style>body{color:black}</style>
</head>

<body>

  <?php require_once 'nlProcess.php'; ?>

  <?php
    session_start();
    if($_SESSION['logged_in'] != true){
      echo("Access denied");
      exit();
    }
    
    if (isset($_SESSION['message'])):?>
      <div class="alert alert-<?=$_SESSION['msg-type']?>">
        <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
      </div>
  <?php endif ?>
  <div class="container">
  <?php
    $mysqli = new mysqli('localhost', 'root', 'root', 'merch') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM newsletter ORDER BY lastName, firstName, email") or die($mysqli->error);
  ?>

  <div class = "row justify-content-center">
    <table class="table">
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th colspan="2">Action</th>
        </th>
      </thead>

      <?php
        while ($row = $result->fetch_assoc()):?>
          <tr>
            <td><?php echo $row['firstName']; ?></td>
            <td><?php echo $row['lastName']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td>
              <a href="nlIndex.php?edit=<?php echo $row['id']; ?>"
                class="btn btn-info">Edit</a>
                <a href="nlProcess.php?delete=<?php echo $row['id']; ?>"
                  class="btn btn-danger">Delete</a>
            </td>
          </tr>
      <?php endwhile; ?>
    </table>
  </div>
</div>


  <div class="row justify-content-center">
  <form action="nlProcess.php" method="POST">
    <input type="hidden" name="id" value=<?php echo $id; ?>>
    <div class="form-group">
      <label>First Name</label>
      <input type="text" class="form-control" name="firstName"
      value="<?php echo $firstName; ?>" placeholder="firstName">
    </div>
    <div class="form-group">
        <label>Last Name</label>
        <input type="text" class="form-control" name="lastName"
        value="<?php echo $lastName; ?>" placeholder="lastName">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="text" class="form-control" name="email"
      value="<?php echo $email; ?>" placeholder="email">
    </div>
    <div class="form-group">
      <?php
        if ($update == true):
      ?>
      <button type="submit" class="btn btn-info" name="update">Update recipient</button>
      <?php
        else:
      ?>
      <button type="submit" class="btn btn-primary" name="create">Add new recipient</button>
    <?php endif ?>
    </div>
  </form>
  </div>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
  <script src="styles.js"></script>
  <script src="main.js" type="text/javascript"></script>
</body>
