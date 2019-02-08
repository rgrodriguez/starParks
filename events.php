<?php
error_reporting (E_ALL ^ E_NOTICE);//my original php element hides type of error on error report
session_start();
	include("dbconnect2.php");
// on the loggin page if the person isnt logged in it would say please loggin if not then it would say welcome back.

		  ?>





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


</head>

<body>


  <div class="landingPic">
    <nav class="navbar navbar-expand-sm navbar-light navbar-custom">
      <a class="navbar-brand nav-item" href="#">
        <span class="d-sm-inline-block d-none">Star Parks</span>
 <img class="fa fa-star d-inline-block d-sm-none" src="srcs/starLogoTest.png" height='50px'>
        </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav right-to-left ml-auto">
          <a class="nav-item nav-link listen" href="https://starparks.bandcamp.com/">Listen</a>
          <a class="nav-item nav-link shows" href="index.html#viewShows">Shows</a>
          <a class="nav-item nav-link merch" href="merch.html">Merch</a>
          <a class="nav-item nav-link videos" href="videos.html">Videos</a>
          <a class="nav-item nav-link about" href="index.html#aboutUs">About</a>
        </div>
      </div>
    </nav>
  </div>

<div class="content about" id="form">
	<div class = "forms">
					 <form action="" method="POST">
					 <p>User Name:</p><input type="text" class="forms" name="username"><br/><br/>
					 <p>Password:</p><br/><input type="password" class="forms" name="password"><br/><br/>
						<input type="submit" class="forms" value="submit" name ="submit"> <br/><br/>
					 </form>
           <form action="" method="POST">
           <input type="submit" class="forms" value="logout" name= "submit1"><br/>

</form>
           <p><?php echo $_SESSION['logged_in_user']; ?></p>
</div>
</div>

	<section class="test3 shows" id="viewShows">
 <h1 style="text-align:center">Shows</h1>
 <hr>
 <br>
 <table>
	 <tbody>
	                 <?php


	      $sql = "SELECT * FROM events";
	      /*$sql= "SELECT * FROM products ORDER BY id ASC";*/
	     $result = mysqli_query($connection, $sql);
	     /*if ($result->num_rows > 0) {
	         // output data of each row
	         while($row = $result->fetch_assoc()) {
	             echo "<br> ". $row["product name"] . $row["stock"]. " " . $row["sku"] . "<br>";
	         }
	     } else {
	         echo "0 results";
	     }*/

	     if($result->num_rows > 0)
	      {
	        while($row = mysqli_fetch_array($result))
	        {
	          ?>





						    <tr>
						      <td><?php echo $row["date"]; ?></td>
						      <td><?php echo $row["venue"]; ?></td>
						      <td><?php echo $row["city"]; ?></td>
						      <td><a href="https://www.bandsintown.com/e/100283109?app_id=squarespace-starparks&came_from=267&utm_medium=api&utm_source=public_api&utm_campaign=event&mkt_source=www.starparksmusic.com" class="button">Get Tickets</a>
						      </td>
						    </tr>


	                 <?php
	        }
	      }
	      ?>

		  </tbody>
		 </table>
		 </section>
  <!--
  <li><span class="date">SEP 6 THU</span><span class="venue">Hotel Vegas</span><span class="city">Austin, TX, United States</span><button type="button" class="btn btn-outline-dark">Tickets</button>
    <hr>
  </li>
  <li><span class="date">SEP 6 THU</span><span class="venue">Hotel Vegas</span><span class="city">Austin, TX, United States</span><button type="button" class="btn btn-outline-dark">Tickets</button>
    <hr>
  </li>
  <li><span class="date">SEP 6 THU</span><span class="venue">Hotel Vegas</span><span class="city">Austin, TX, United States</span><button type="button" class="btn btn-outline-dark">Tickets</button>
    <hr>
  </li>
-->
  <!--
    <input type="text" id="add" size ="50"/>
    <input type="button" id="addShow" value="Add Show" onclick="addShow()"></input>
-->
  <!--
  <div class="newsletter">
  <h2>Subscribe to our newsletter</h2>
  <div class="container">
    <form>
      <div class="form-row">
        <div class="col">
          <input type="text" class="form-control" placeholder="First name">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Last name">
        </div>
        <br>
        <div class="form-group">
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
        </div>
      </div>
    </form>
  </div>
</div>
-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
  <script src="styles.js"></script>
  <script src="main.js" type="text/javascript"></script>


</body>

</html>
