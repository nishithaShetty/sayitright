<?php

if(isset($_GET['delete']))
{ 
	include_once 'dbh.inc.php';

	$id = $_GET['delete'];
	$sql = "Delete from events where id=$id";

    $result =mysqli_query($conn,$sql);

    $sql1 ="Delete From event where event_id='$id'";

    $result =mysqli_query($conn,$sql1);

    header("Location:../event_admin.php?success");
}