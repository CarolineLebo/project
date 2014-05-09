<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="External.css" />
<title>Welcome to C&T Bags</title>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
 <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
</head>

<body>


<div align = "right" id="box1">
    <!-- Begin FusionBot.com site search engine code -->
<form name="fbsearch" method="get" action="http://ss779.fusionbot.com/b/q" style="margin:0;">
  <div align="right"><font size="2" face="arial"><a href="http://www.fusionbot.com" target="_blank">Search C&T Bags</a>:</font><br />
  <input type="text" name="keys" size="15">
  <input type="submit" value="GO"><br />
  </div>
</form> 
<!-- End FusionBot.com site search engine code -->
<a href="products.php" title="Buy " style="background-image:url(cart.jpg);width:140px;height:140px;display:block;">Buy<br/></a></td><p id="mainnav">
     
    <h1> C&T Bags</h1>
</div>
<div align = "center" id="box1">
<div align="right">
  <div class="main">
  <table width="1053" border="0">
  <tr>
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
      
	  <a class="brand" href="userLogin.php">Login</a>
	  <a class="brand" href="UserRegister.php">Register</a>
	  <a class="brand" href="products.php">Gallery</a>
	  <a class="brand" href="contact.php">Contact Us</a>
	  <a class="brand" href="about.php">About Us</a>
 
      <!-- Everything you want hidden at 940px or less, place within here -->
      <div class="nav-collapse collapse">
        <!-- .nav, .navbar-search, .navbar-form, etc -->
      </div>
 
    </div>
  </div>
</div>
    <?php
	
        $pictures = array('213446_3_1.jpg','237250_4_1.jpg','260641_3_1.jpg','258103_3_1.jpg','274325_2_1.jpg','271289_2_1.jpg','270005_1_3.jpg');
		shuffle($pictures);
		
		for($i = 0; $i<1;$i++ )
		{
			echo "<td align=\"center\"><img src=\" ";
			echo $pictures[$i];
			echo "\"/></td>";
		}

	?>
   
  </div>
  <div align="center">

    <td width="747"><div class="main"></div>
      <div align="center">
        <p id="pic" align="center">&nbsp; </p>
        <p>C & T Bags is an online shop where</p>
		<p>you can buy all types of designer bags selected and </p>
		<p>styled by your favourite magazines, be it travelling bags, hand bags, schoolbags, </p>
		<p>and shopping bags. Shopping on C & T Bags is easy, hassle-free and fun.</p>
		<p>It's also completely safe. Stay up to date on the latest trends, build up your wishlist,</p>
		<p>add items to your basket, and shop yourself fabulous. </p>
			<p>**C & T Bags** delivers free of charge</p>
			<p>in South Africa, either door to</p>
			<p>door or door to counter, depending on where you're based. And, on the off chance</p>
			<p>you're not completely delighted with your purchase, you can return it FREE OF CHARGE</p>
			<p>within 30 days of receiving it. </p>
</p>
      </div></td>
  </tr>
</table>
<p>&nbsp;</p>
</div>
</div>
 <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
   
  <table width="1032" border="0">
    <tr>
      </table>
 
      <footer>
			<div id="Format">

			<p><I>C&T bags &copy; 2014 All Rights Reserved</I></p>
			</div>
		</footer>
    </tr>
  
  
  
</div>

</body>
</html>