<?php
include_once 'dbh.inc.php';

session_start(); //starting session

$error ='invalid username'; //varaiable to store rror message

if(isset($_GET['submit']))
{
if(empty($_GET['em'])||empty($_GET['pas']))
{
header("Location:../login.php?login=empty");
}

else
{
 
  $email = $_GET['em'];
  $pass = $_GET['pas'];

  $sql ="select * from user where email='$email'";
  $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck == 1)
    {
       $row = mysqli_fetch_array($result);
       $status = $row['status'];
       $pass2 = $row['password'];

       if($pass2 == $pass)
       { 

          $_SESSION['login_user'] = $email;
         
           if($status == 0)
           {

          header("Location: ../loginIndividualUser.php");
          
           }

           else
           {
             
            header("Location: ../loginIndividualUser1.php");
           
           }
}
else
{

  echo $error;
}
       }
       else
       {
        header("Location:../login.php?login=error");
          echo $error;
      
 }      }
}
  else
  {
  header("Location:../login.php?login=error");
   echo $error;
  }



