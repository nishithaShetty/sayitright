<?php
include('../sessions.php');
$conn =mysqli_connect("localhost","root","","sayitright");
if(isset($_POST['submit']))
{

$name=$_POST['name'];
$description=$_POST['description'];
$date=$_POST['date'];
$sede=$_POST['sede'];
$confirmation=$_POST['confirmation'];


$sql = "insert into conference(conference_name,description,date,sede,confirmation)
values ('$name', '$description','$date' ,'$sede','$confirmation');";
$result = mysqli_query($conn,$sql);

$sql3 = "Select * from conference ORDER BY id DESC LIMIT 1;"; 
$result2=mysqli_query($conn,$sql3);
$row= mysqli_fetch_array($result2);
$val = $row['id'];

echo $val;

if($val != 0){
$sql2 = "insert into conferences(uid,conference_id) values('$login_id','$val');"; 

$result2 = mysqli_query($conn, $sql2);


}
 
 
echo '<script>window.location="../conference_admin.php"</script>';


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
       <h3 align ="left">ADD EVENT</h3>
       
      <form action="add1.php" method="post" >      

      Conference Name : <input type="text" name="name" ><br><br>
      Description  : <TEXTAREA name="description"></TEXTAREA> <br><br>
      Date : <input type="text" name="date" ><br><br>
      Place: <input type="text" name="sede" ><br><br>
      Cnfirmation: <input type="text" name="confirmation" ><br><br>
          <input type="submit" name="submit" value="ADD"><br><br>
       </form>
       
    </div> 

  </div>


</body>
<div>
  
</div>
</html>