<?php

$conn =mysqli_connect("localhost","root","","sayitright");
if(isset($_POST['submit']))
{
$id = $_GET['edit'];
$name=$_POST['name'];
$description=$_POST['description'];
$date=$_POST['date'];
$sede=$_POST['sede'];
$confirmation=$_POST['confirmation'];

$sql = "UPDATE conference
     SET conference_name = '$name', description= '$description', date='$date', sede='$sede', confirmation='$confirmation'
WHERE id = $id;";
 $result = mysqli_query($conn,$sql);
header("Location:../conference_admin.php");


}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    
     <!--JQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

     <!-- latest compiled Javascript-->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<title> Say It Right</title>
</head>
<div id="wrapper">
<body>

<header>

</header>
<body>

	<div class="first">
		<div class="container">
       <h3 align ="left">UPDATE CONFERENCE</h3>
       <?php 

       if(isset($_GET['edit']))
       {
        $id = $_GET['edit'];
       $query ="SELECT * FROM conference  where id=$id ";
       $result = mysqli_query($conn,$query);
       if(mysqli_num_rows($result)==1)
       { 
        $row = mysqli_fetch_array($result);
      ?>
      <form action="edit1.php?edit=<?php echo $row['id'];?>" method="post" >      

      Events Name :<input type="text" name="name" value="<?php echo $row['conference_name']  ?>"><br>
      Description  :<input  type="text" name="description" value="<?php echo $row['description']  ?>"><br>
      Date :<input type="text" name="date" value="<?php echo $row['date']  ?>"><br>
      Place:<input type="text" name="sede" value="<?php echo $row['sede']  ?>"><br>
      Cnfirmation:<input type="text" name="confirmation" value="<?php echo $row['confirmation']  ?>"><br>
          <input type="submit" name="submit" value="Update"><br>
       </form>
       <?php }}?> 
    </div> 

	</div>


</body>
<div>
	
</div>
</html>