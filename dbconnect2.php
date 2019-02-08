
<?php
  $username = "root";
  $password = "root";
  $database = "merch";
  $connection = mysqli_connect("localhost" , "$username" , "$password", "$database") or die(mysql_error());  //(host,username,password,) Connects to mysql server. Throws error if it cannot connect.
?>
