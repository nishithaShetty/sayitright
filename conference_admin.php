<?php

$conn =mysqli_connect("localhost","root","","sayitright");
include_once'sessions.php';

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

<a href="home.php"><img class="logo" src="imgsay\say.png" alt="logo"></a>
<nav>
    <ul>
      <li><a href="loginIndividualUser1.php">HOME </a></li>
      <li><a href="conference_admin.php">CONFERENCES</a></li>
      <li><a href="event_admin.php">EVENTS</a></li>
      <li><a href="MyConferences.php">MY CONFERENCES</a></li>
      <li><a href="MyEvent.php">MY EVENTS</a></li>
        <li><a href="profile.php">SETTINGS</a></li>
      
    </ul>

  </nav>

</header>
<body>

  <div class="first">
    
       <h3 align ="center">CONFERENCES</h3>
       
         <div class="table-responsive">
              <table class="table table-bordered">
            <tr>
                 <th width="10%">Event</th>
                 <th width="40%">Description</th>
                 <th>date</th>
                 <th>sede</th>
                 <th>confirmation</th>
                 <th width="20%">Changes</th>
                 
                 </tr>
                 <?php
                 
         $query ="Select * from conferences INNER JOIN conference ON conferences.conference_id = id where uid='$login_id';";
       $result = mysqli_query($conn,$query);
       if(mysqli_num_rows($result)>0)
       {
             while($row = mysqli_fetch_array($result))
             {
               ?>
             
            
                
                 <tr>
                  <td><?php echo $row['conference_name'] ?></td>
                  <td><?php echo $row['description'] ?></td>
                  <td><?php echo $row['date'] ?></td>
                  <td><?php echo $row['sede'] ?></td> 
                  <td><?php echo $row['confirmation'] ?></td>
                  <td> <a href="includes/edit1.php?edit=<?php echo $row['id'];?>" class ="btn btn-info">Edit</a>
                      
                      <a href="includes/delete1.php?delete=<?php echo $row['id'];?>" class ="btn btn-danger">Delete</a>
                   
                    </td>

                  

                 </tr>
                 <?php

       }}
?>

                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td> 
                  <td></td>
                  <td>
                                <a href="includes/add1.php" class ="btn btn-info">Add</a> </td> 
                    </tr>


                  
             </table>
             </div>
            

    </div> 





  


</body>
<div>
  <div class="footer">
<hr>
  <p> Copyrigt &copy 2019 All rights reserved| The web is made  with &hearts;
    <span style="color:   #00FFFF">By DiazApps</span>
  </p>
</div>
</footer>
</div>
</html>