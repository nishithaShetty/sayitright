<?php

if(isset($_GET['submit']))
{
include_once 'dbh.inc.php';


$first = $_GET['first'];
$last = $_GET['last'];
$email = $_GET['email'];
$pass = $_GET['pass'];

if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last))
{
header("location:../signup_event.php?signup=char");
exit();
}
else{
  if(!preg_match("/^[a-z][a-zA-Z -]+$/", $pass))
  {
header("location:../signup_event.php?signup=pass");
exit();

  }
  else
{
$sql = "insert into user(fname,lname,email, password,status)
values ('$first', '$last', '$email','$pass',1);";
$result = mysqli_query($conn,$sql);

header("Location:../signup_event.php?signup=success");

}
}
}
else
{
header("Location: ../signup_event.php?signup=error");
exit();
}
?>