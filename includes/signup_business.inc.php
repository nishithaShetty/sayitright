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
 <h3> SIGN UP</h3>
	</div>
    <div class="first">
           <form action="includes/signup_business.inc.php" method="get" onsubmit =" return validation();">
         	<fieldset class="third">
         		<h3> Select the Type of Users</h3>
            <a href="signup_individual.php">
            <button type="button">Individual</button>
            </a>
            <a href="signup_event.php">
            <button type="button">Event</button>
            </a>
            <a href="signup_business.php">
            <button type="button">Business</button>
            </a>

                <hr>
                <h3> Welcome to Business Records</h3><br>
                <p>Type of business</p>
                <input type="radio" name="work" id="work" value="University"> University
                 <input type="radio" name="work" id="work" value="Company"> Company<br>
                <input type="text" name="first1" id="first1" placeholder="Enter your first name">
                <br>
                <input type="text" name="last1" id="last1" placeholder="Enter your last name">
                
                <br/>
                <input type="Email" name="email1"  id="email1" placeholder="Enter Email">
                <br/>
                <input type="password" name="pass1" id="pass1" placeholder="Enter password">
                <br/>
                <input type="submit" name="submit" value="submit">
      <?php

$fullurl ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(strpos($fullurl, 'signup=char') == true)
{
echo "<p class='error'>You used invalid charaters!</p>";
exit();
}

if(strpos($fullurl, 'signup=pass') == true)
{
echo "<p class='error'>Enter valid password</p>";
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
function validation()
{
    $first = document.getElementById('first1').value;
    $last = document.getElementById('last1').value;
    $email = document.getElementById('email1').value;
    $pass = document.getElementById('pass1').value;
    $work = document.getElementById('work').value;


    if($first == ""|| $last == ""|| $email == ""|| $pass == ""|| $work == "")
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
	<p> Copyrigt &copy 2019 All rights reserved| The web is made  with &hearts; by DiazApps</p>
</div>
</footer>
</div>
</html>