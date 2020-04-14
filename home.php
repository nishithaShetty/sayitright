<?php
include_once 'includes\dbh.inc.php';

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<title> Say It Right</title>
</head>
<div id="wrapper">


<header>



<a href="home.php"><img class="logo" src="imgsay\say.png" alt="logo"></a>
<nav>
			<ul>
			<li><a href="home.php">HOME </a></li>
			<li><a href="aboutus.php">ABOUT US</a></li>
			<li><a href="../http://nishetty1495.uta.cloud/uncategorized/biology/">BLOG</a></li>
			<li><a href="buyfromus.php">BUY FROM US</a></li>
			<li><a href="contact.php">CONTACT</a></li>
		    <li><a href="signup.php">SIGN UP</a></li>
			<li><a href="login.php">LOGIN</a></li>
		</ul>

	</nav>

</header>
<body>

	<div class="back">

<p>
For Good communication <br/>
<span style="color:#ff0000">Say it right</span><br>
 is a tool that<br> you should use
</p>


	</div>
<body>
<div class="footer1">
	
<h2>Subscribe Our Newsletter</h2>
<form action="contact.inc.php" method="post">
<input type="email" name="emailsub" placeholder="email address">
<input  type="submit" name="name1" value="subscribe">
</form>
<p>We wont send any spams</p>
 <div class ="emailsent">

	
 </div>

</div>

<div>
	<div class="footer">
<hr>
	<p> Copyrigt &copy 2019 All rights reserved| The web is made  with &hearts;
	  <span style="color: 	#00FFFF">By DiazApps</span>
	</p>
</div>
</footer>
</div>
</html>