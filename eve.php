<?php

$conn =mysqli_connect("localhost","root","","sayitright");

if(isset($_GET['add']))
{ 

	include_once 'dbh.inc.php';
	include_once'sessions.php';
    
	$id = $_GET['add'];
	$sql = "insert into event1(uid, event_id)
           values ('$login_id', '$id');";

    $result =mysqli_query($conn,$sql);
     echo '<script>window.location="events.php"</script>';;
}