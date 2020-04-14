<?php

if(isset($_GET['delete']))
{ 
	include_once 'dbh.inc.php';

	$id = $_GET['delete'];
	$sql = "Delete from conference where id=$id";
     $result =mysqli_query($conn,$sql);
	$sql1 ="Delete From conferences where conference_id='$id'";

    $result =mysqli_query($conn,$sql1);


    
    header("Location:../conference_admin.php?success");
}