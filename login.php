<?php
error_reporting (E_ALL ^ E_NOTICE);//my original php element hides type of error on error report
session_start();
	include("dbconnect2.php");
// on the loggin page if the person isnt logged in it would say please loggin if not then it would say welcome back.
	if((isset($_POST['submit'])) && (!isset($_SESSION['logged_in']))) {
		$username = $_POST['username'];
		//$password = sha1($_POST['password']);
		$password = $_POST['password'];
		//$password = mysql_real_escape_string($password = sha1($_POST['password']));
		$sql = "SELECT * FROM login WHERE username ='".$username."' AND password='".$password."' LIMIT 1";
	$result = mysqli_query($connection, $sql);
	if ($result->num_rows == 1){
		$row = $result->fetch_assoc();
		$_SESSION['logged_in'] = true;
		$_SESSION['logged_in_user'] = $username;
		$_SESSION['logged_in_user_email'] = $email;
		echo "You are now logged in " . $_SESSION['logged_in_user'] . ". You will be redirected to the homepage.";
		print_r($row);
		echo $row['type'];
	}
	if ($row['type'] == 'admin'){
		session_regenerate_id(true);
		$_SESSION['user_admin'] = true;
		echo "welcome admin";
}

	else{
		echo "Invalid username and password";
	}
				}
				else {
}
if (isset($_SESSION['logged_in'])) {
		//header("Refresh: 5; ");
	}
  //if(!empty($_POST['username']) && !empty($_POST['password'])){
//if (!$_POST == ""){i was hoping this could work but i went with the latter approach.
		//$username = $_POST['username'];
		//$password = $_POST['password'];
		//if($username!=="dig3134user"){ //checks to see if anything other than dig3134user
		//	echo"Incorect username or password";
		//}
		//	elseif ($password!=="dig3134pass") {
		//	echo"Incorrect username or password";
		//	}
		//	else{ //if correct should loggin and create a cookie
//setcookie('username',$_POST['username']);			}
	//}
	if(!empty($_POST['submit1'])){
		$submit1= $_POST['submit1'];
if($_POST["submit1"]){ //when loggot is clicked should unset cookie but i have an error undefined index dont know how to fix
	//setcookie('username',$_POST['username'],time()-7200);
	//unset$_SESSION['logged_in'];
	//unset$_SESSION['logged_in_user'
	session_destroy();
	session_unset();
}
}
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

  <header>
    <a href="#">
  <!--<img src="srcs/starLogoTest.png" height='42px'>--><h1 class="about">Star Parks</h1>
</a>
  </header>


    <div class="content footer">
      <h6><b>Booking:</b> starparksbooking@gmail.com
        <br><br><b>Label:</b> Paper Trail Records •
      Dan Finnegan & Jack Rainey <br><br>All Content Copyrighted Brave Advisor Songs
       - BMI<br><br>Andy Bianculli - guitar, vocals • Ben Burdick - bass, vocals • Nathaniel
        Klugman - keys • Keith Lough - drums • Derek Phelps - trumpet • Wayne Myers - trombone</h6>
        <br>
      <a href="https://www.facebook.com/StarParksBand/" class="button"><i class="fab fa-facebook-f"></i></a>
      <a href="https://www.instagram.com/star_parks/" class="button"><i class="fab fa-instagram"></i></a>
      <a href="https://twitter.com/star_parks" class="button"><i class="fab fa-twitter"></i></a>
    </div>
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
