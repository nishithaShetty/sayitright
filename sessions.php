<?php
$conn =mysqli_connect("localhost","root","","sayitright");

session_start();

$user_check =$_SESSION['login_user'];
echo $user_check;

$ses_sql = "select * from user where email='$user_check';";
$result = mysqli_query($conn,$ses_sql);
$resultCheck = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
$login_id = $row['user_id'];
$login_status = $row['status'];
echo $login_id;




if(!isset($login_id))
{

	mysqli_close();
	header("Location: profile.php");
}


?>