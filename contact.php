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
         <h3>CONTACT</h3>
     	
   
	</div>
     <div class="first">
         <form method="get" action="includes/contact.inc.php"  onsubmit = " return validation();">
         	<fieldset class="full">
         	<input type="text"  name="first3" id="first3" placeholder="Enter your name" >
             	<textarea id="story" name="story" rows="5" cols="30" placeholder="Enter Message"></textarea>
         	<br>

         	<input type="text" id="last3" name="last3" placeholder="Enter last name" >
             <br>
             <input type="email" id="email" name="email" placeholder="Enter email" >
             <br>
            <input type="tel" id="tel" name="tel3"  placeholder="Telephone" >
             <br>

            <input type="submit" name="submit" value="Send Message" >
              
                <?php

$fullurl ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(strpos($fullurl, 'signup=char') == true)
{
echo "<p class='error'>You used invalid charaters!</p>";
exit();
}

if(strpos($fullurl, 'signup=tel') == true)
{
echo "<p class='error'>Enter valid telephone</p>";
exit();
}

elseif(strpos($fullurl, "signup=success") == true)
{
echo "<p class='error'>You have been signed up</p>";
exit();
}

?>


              
              </fieldset>

         </form>

     </div>
<script type="text/javascript">

function validation(){
$first = document.getElementById('first3').value;
$last = document.getElementById('last3').value;
$message = document.getElementById('story').value;
$tel = document.getElementById('tel').value;
$email = document.getElementById('email').value;





if( $first == ""|| $last == ""||$tel == "")
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