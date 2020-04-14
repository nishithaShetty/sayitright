<?php

include_once 'includes/dbh.inc.php';

if(isset($_GET['delete']))
{ 

	
	include_once'sessions.php';
    
	$id = $_GET['delete'];
	$sql = "Delete from conferences where conference_id='$id'";

    $result =mysqli_query($conn,$sql);
    header("Location: Myconferences.php?success");
  }