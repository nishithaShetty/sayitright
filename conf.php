<?php

include_once 'includes/dbh.inc.php';

if(isset($_GET['add']))
{ 
	include_once 'dbh.inc.php';
    include_once'sessions.php';

	$id = $_GET['add'];
	$sql = "insert into conferences(uid, conference_id)
           values ('$login_id', '$id');";

    $result =mysqli_query($conn,$sql);
    header("Location: conference.php?success");
}