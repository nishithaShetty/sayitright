<?php

if(isset($_GET['submit']))
{
include_once 'dbh.inc.php';

$first = $_GET['first3'];

$last = $_GET['last3'];

$message = $_GET['story'];

$tel = $_GET['tel3'];

$email= $_GET['email'];





if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last))
{
header("location:../contact.php?signup=char");
exit();
}
else{
  if(!preg_match("/\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}/", $tel))
	{
header("location:../contact.php?signup=tel");
exit();

	}
	else
{
    $sql = "insert into contact(fname,lname,telephone,message)
values ('$first', '$last', '$tel','$message');";

$result = mysqli_query($conn,$sql);

header("Location:../contact.php?signup=success");

}
}
}
else
{
header("Location: ../contact.php?signup=error");
exit();
}
?>