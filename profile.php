<?php

$conn =mysqli_connect("localhost","root","","sayitright");
if(isset($_POST['submit']))
{
$id = $_GET['edit'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
//$work=$_POST['work'];
//$school=$_POST['school'];



$sql = "UPDATE user
     SET fname = '$fname', lname='$lname', email ='$email', password='$pass'
WHERE user_id = $id;";
 $result = mysqli_query($conn,$sql);
header("Location: profile.php");




}
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
       <?php
                 include_once'sessions.php';
                 $query ="SELECT * FROM user  where user_id='$login_id'";
                 $result = mysqli_query($conn,$query);
                 if(mysqli_num_rows($result)==1)
       { 
        $row = mysqli_fetch_array($result);
      if($row['status']==0)
      {?>
      <li><a href="loginIndividualUser.php">HOME </a></li>
      <li><a href="conference.php">CONFERENCES</a></li>
      <li><a href="events.php">EVENTS</a></li>
      <li><a href="MyConferences.php">MY CONFERENCES</a></li>
      <li><a href="MyEvent.php">MY EVENTS</a></li>
        <li><a href="profile.php">SETTINGS</a></li>
     <?php }
      else
      {?>
         <li><a href="loginIndividualUser1.php">HOME </a></li>
      <li><a href="conference_admin.php">CONFERENCES</a></li>
      <li><a href="event_admin.php">EVENTS</a></li>
      <li><a href="MyConferences.php">MY CONFERENCES</a></li>
      <li><a href="MyEvent.php">MY EVENTS</a></li>
      <li><a href="profile.php">SETTINGS</a></li>
     <?php }


?>




    </ul>

  </nav>

</header>

	

    <div class="first">
    	     
    		<form action="profile.php?edit=<?php echo $row['user_id'];?>" method="post" >  
    			<fieldset class="fifth">
    				<h3> Welcome to your profile</h3>
    				<hr>

    					<div class="seperate1">
    <img src="imgsay\user.jpg" alt="fran" width="600" height="400">
  </a>
  <div class="seperate2"> 
       	
       	<button type="button">Change Image</button>
       </div>
       </div>
    				<div class="seperate1">
    					<div class="seperate2"> 

          
    			
    			<input type="text" name="fname" value="<?php echo $row['fname']  ?>">
    			<input type="text" name="lname" value="<?php echo $row['lname']  ?>"><br/>
    			<input type="text" name="work"  value="<?php echo $row['work']  ?>"><br/>
    			<input type="text" name="school" value="<?php echo $row['school']  ?>"><br/>	
    			<input type="email" name="email" value="<?php echo $row['email']  ?>">
    			
    			<br>
    			<input type="password" name="pass" value="<?php echo $row['password']  ?>">
    			<br>

    			<input type="submit" name="submit" value="Save changes">

    		</div>
    	</div>
              </fieldset>
    		</form>

<?php }
?>
        

		</div>




</body>
<footer>
	<div class="footer">
<hr>
	<p> Copyrigt &copy 2019 All rights reserved| The web is made  with &hearts;
    <span style="color:   #00FFFF">By DiazApps</span>
  </p>
</div>
</footer>
</div>
</html>