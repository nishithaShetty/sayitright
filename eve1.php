<?php

$conn =mysqli_connect("localhost","root","","sayitright");

if(isset($_GET['delete']))
{ 

	
	include_once'sessions.php';
    
	$id = $_GET['delete'];
	$sql = "Delete from event1 where event_id='$id'";
    $result =mysqli_query($conn,$sql);
    echo '<script>window.location="MyEvent.php"</script>';
  }