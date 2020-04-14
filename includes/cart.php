<?php 
include_once 'dbh.inc.php';

$sql = 'select * from product order by product_id ASC;';

$result = mysqli_query($conn,$sql);
if($result)
{
	if(mysqli_num_rows($result)>0)
	{

		while($product = mysqli_fetch_assoc($result))
		{
			print_r($product);
		}
	}
}
