<?php

if(isset($_GET['submit']))
{
include_once 'dbh.inc.php';



$first = $_GET['first2'];

$last = $_GET['last2'];

$email = $_GET['email2'];

$pass = $_GET['pass2'];

$place =$_GET['place'];

$school = $_GET['school'];



if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last))
{
header("location:../signup_individual.php?signup=char");
exit();
}
else{
  if(!preg_match("/^[a-z][a-zA-Z -]+$/", $pass))
  {
header("location:../signup_individual.php?signup=pass");
exit();

  }
  else
{


$sql = "insert into user(fname,lname,email,password,work,school,status) values('$first','$last','$email','$pass','$place','$school',0);";


$result = mysqli_query($conn,$sql);


header("Location:../signup_individual.php?signup=success");



}
}
}
else
{
header("Location: ../signup_individual.php?signup=error");
exit();
}
