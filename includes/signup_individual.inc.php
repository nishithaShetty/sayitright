<?php
include_once 'dbh.inc.php';


$first = $_GET['first2'];
$last = $_GET['last2'];
$email = $_GET['email2'];
$pass = $_GET['pass2'];
$place =$_GET['place'];
$school = $_GET['school'];


$sql = "insert into user(fname,lname,email,password,work,school,status) values('$first','$last','$email','$pass','$place','$school',0);";

$result = mysqli_query($conn,$sql);

header("Location:../signup_individual.php");


