<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="External.css" />
    <title>Register</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
  </head>
 
  <body>
<div id="box1" align="center">
    
<form name="fbsearch" method="get" action="http://ss779.fusionbot.com/b/q" style="margin:0;">
  <div align="right"><font size="2" face="arial"><a href="http://www.fusionbot.com" target="_blank">Search C&T Bags</a>:</font><br />
  <input type="text" name="keys" size="15">
  <input type="submit" value="GO"><br />
  </div>
</form> 

	<div id ="box1" align ="right">
	<a href="products.php" title="Buy " style="background-image:url(cart.jpg);width:140px;height:140px;display:block;">Buy<br/></a></td><p id="mainnav">
	</div>
	<h1>C&T Bags</h1>
		<div class="navbar navbar-inverse">
  <div class="navbar-inner">
    <div class="container">
 
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <!-- Be sure to leave the brand out there if you want it shown -->
      
	  <a class="brand" href="home.php">Home</a>
	  <a class="brand" href="contact.php">Contact Us</a>
	  <a class="brand" href="products.php">Gallery</a>
	  <a class="brand" href="userLogin.php">Login</a>
	<a class="brand" href="about.php">About Us</a>
      <!-- Everything you want hidden at 940px or less, place within here -->
      <div class="nav-collapse collapse">
        <!-- .nav, .navbar-search, .navbar-form, etc -->
      </div>
 
    </div>
  </div>
</div>
  <h1>Create Your New C&T Bags Account</h1>
		<form id="form1" name="form1" method="post" action="UserRegister.php">
         <p align="left">First Name :
          <input type="text" name="firstName" id="fname" />
          </p>
        <p align="left">Last Name :
          <input type="text" name="surname" id="txtLastName" />
          </p>
		  
		  <p align="left">Cell Number :
          <input type="text" name="cell" id="cell" />
          </p> 

          <p align="left">Email :
          <input type="text" name="email" id="email" />
          </p>
		  
		    <p align="left">Country :
          <input type="text" name="country" id="country" />
          </p> 

		  <p align="left">City :
          <input type="text" name="city" id="city" />
          </p> 

		  <p align="left">Address :
          <input type="text" name="address" id="address" />
          </p> 

		 
        <p align="left">Password:
          <input type="text" name="password" id="password" />
          </p>
            <p align="left">Repeat password :
          <input type="text" name="password1" id="password" />
          </p>
		 

          </p>
        <p align="left">
          <input type="submit" name="btnRegister" id="btnRegister" value="Register" />
         
          <input type="reset" name="btnCancel_Reg" id="btnCancel_Reg" value="Cancel" />
          </p>
		     <footer>
			<div id="Format">

			<p><I>C&T bags &copy; 2014 All Rights Reserved</I></p>
			</div>
		</footer>
          </form>
</div>	

<?php 

$firstName=strtoupper($_POST['firstName']);
$surname=strtoupper($_POST['surname']);
$cell=$_POST['cell'];
$email=$_POST['email'];
$co=$_POST['country'];
$city=$_POST['city'];
$add=$_POST['address'];
$pass=$_POST['password'];
$pass1=$_POST['password1'];

$conn=mysql_connect('localhost','projects','bags');

	if(!$conn)
	{
	echo 'Could not connect to the database';	
	exit;
	}
	
	$db = mysql_SELECT_db('c&tbags_db');

	if(!$db)
{
	echo 'Database selection failed';	
	exit;
}
$insert="insert into customer values(null, '$firstName','$surname','$pass','$email','$co','$city','$add','$pass')";
  echo $query;
 
$results = mysql_query($insert);

if(!$results)
{
	echo 'submission failed';	
	exit;
}

echo mysql_affected_rows($conn)."user added in";
 ?>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
