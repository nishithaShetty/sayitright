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
<header>

<a href="home.php"><img class="logo" src="imgsay\say.png" alt="logo"></a>
<nav>
    <ul>

       <?php
                
                 $query ="SELECT * FROM user  where user_id='$login_id'";
                 $result = mysqli_query($conn,$query);
                 if(mysqli_num_rows($result)==1)
       { 
        $row = mysqli_fetch_array($result);
      if($row['status']==0)
      {?>
      <li><a href="loginIndividualUser.php">HOME </a></li>
      <li><a href="conference.php">CONFERENCES</a></li>
      <li><a href="events.php">EVENTS</a></li>
      <li><a href="MyConferences.php">MY CONFERENCES</a></li>
      <li><a href="MyEvent.php">MY EVENTS</a></li>
        <li><a href="profile.php">SETTINGS</a></li>
     <?php }
      else
      {?>
         <li><a href="loginIndividualUser1.php">HOME </a></li>
      <li><a href="conference_admin.php">CONFERENCES</a></li>
      <li><a href="event_admin.php">EVENTS</a></li>
      <li><a href="MyConferences.php">MY CONFERENCES</a></li>
      <li><a href="MyEvent.php">MY EVENTS</a></li>
      <li><a href="profile.php">SETTINGS</a></li>
     <?php 
   }
}

?>



      
    </ul>

  </nav>

</header>
<body>

  <div class="first">
    
       <h3 align ="center"> MY Events</h3>
       <?php 
       $query ="Select * from event1 INNER JOIN events ON event1.event_id = id where uid='$login_id';";
       $result = mysqli_query($conn,$query);
       if(mysqli_num_rows($result)>0)
       { ?>
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
             while($row = mysqli_fetch_array($result))
             {
               ?>
             
            
                
                 <tr>
                  <td><?php echo $row['events_name'] ?></td>
                  <td><?php echo $row['description'] ?></td>
                  <td><?php echo $row['date'] ?></td>
                  <td><?php echo $row['sede'] ?></td> 
                  <td><?php echo $row['confirmation'] ?></td>
                  <td>  <a href="eve1.php?delete=<?php echo $row['id'];?>" class ="btn btn-danger">DELETE</a>
                   
                    </td>

                  

                 </tr>
                 <?php

       }

}
       ?>

                  
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