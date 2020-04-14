<?php

include_once 'includes/dbh.inc.php';

?>



<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<title> Say It Right</title>
</head>
<div id="wrapper">
<body>
<header>

<a href="home.php"><img class="logo" src="imgsay\say.png" alt="logo"></a>
<nav>
		<ul>
			<li><a href="home.php">HOME </a></li>
			<li><a href="aboutus.php">ABOUT US</a></li>
			<li><a href="home.php">BLOG</a></li>
			<li><a href="buyfromus.php">BUY FROM US</a></li>
			<li><a href="contact.php">CONTACT</a></li>
		    <li><a href="signup.php">SIGN UP</a></li>
			<li><a href="login.php">LOGIN</a></li>
		</ul>

	</nav>

</header>

	<div class="decor1">
     <h3> LOGIN</h3>
	</div>

    <div class="first">
    	
    		<form method="get" action="includes/login.inc.php"  onsubmit = " return validation();">
    			<fieldset class="second">
    			<input type="email" name="em" placeholder="enter email">
    			
    			<br>
    			<input type="password" name="pas" placeholder="enter password">
    			<br>

    			<input type="submit" name="submit" value="SEND">
    			
    			<?php

$fullurl ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(strpos($fullurl, 'login=empty') == true)
{
echo "<p class='error'>Enter details</p>";
exit();
}

elseif(strpos($fullurl, 'login=error') == true)
{
echo "<p class='error'>Invalid email or password</p>";
exit();
}



?>
    			
    			
              </fieldset>
    		</form>


        

		</div>

<script type="text/javascript">

function validation(){

$email = document.getElementById('em').value;
$pass1 = document.getElementById('pas').value;





if( $email == ""|| $pass1 = "")
{

alert('all fields required');

return false;
}

else
{
return true;

}

}
</script>




</body>
<footer>
	<div class="footer">
<hr>
	<p> Copyrigt &copy 2019 All rights reserved| The web is made  with &hearts;
	  <span style="color: 	#00FFFF">By DiazApps</span>
	</p>
</div>
</footer>
</div>
</html>