<?php

if(isset($_GET['submit']))
{
include_once 'dbh.inc.php';


$first = $_GET['first1'];
$last = $_GET['last1'];
$email = $_GET['email1'];
$pass = $_GET['pass1'];
$work = $_GET['work1'];





if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last))
{
header("location:../signup_business.php?signup=char");
exit();
}
else{
    if(!preg_match("/^[a-z][a-zA-Z -]+$/", $pass))
    {
header("location:../signup_business.php?signup=pass");
exit();

    }
    else
{

$sql = "insert into user(fname,lname,email, password, occupation, status)
values ('$first', '$last', '$email','$pass', '$work' , 1);";
$result = mysqli_query($conn,$sql);

header("Location:../signup_business.php?signup=success");

}
}
}
else
{
header("Location: ../signup_business.php?signup=error");
exit();
}