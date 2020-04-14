<?php 
$conn =mysqli_connect("localhost","root","","sayitright");

session_start();
if(isset($_POST['add_to_cart']))
{
if(isset($_SESSION["shopping_cart"]))
{
$item_array_id = array_column($_SESSION["shopping_cart"],'item_id');
if(!in_array($_GET['id'], $item_array_id) )
  {

    $count = count($_SESSION["shopping_cart"]);
  
$item_array = array(
 'item_id' => $_GET["id"],

                    'item_name' =>$_POST["hidden_name"],
 'item_price' => $_POST["hidden_price"],
   'item_quantity' =>$_POST["quantity"]);



    $_SESSION["shopping_cart"][$count] = $item_array;
              }

  else

{
  echo '<script> alert("item already added")</script>';
 echo '<script> window.location="buyfromus.php"</script>';
   
}
}

else
{

  $item_array = array(
           'item_id' => $_GET["id"],
                  'item_name' =>$_POST["hidden_name"],
                  'item_price' =>$_POST["hidden_price"],
                  'item_quantity' => $_POST["quantity"]);
    
               $_SESSION["shopping_cart"][0] = $item_array;
  
}
}

if(isset($_GET["action"]))
{
if($_GET["action"]=="delete")
{
   foreach ($_SESSION["shopping_cart"] as $key => $values)
    {

     if($values['item_id'] == $_GET['id'])
     {

      unset($_SESSION["shopping_cart"][$key]);
      echo '<script> alert("the item is removed") </script>';

      echo '<script> window.location="buyfromus.php" </script>';
      

     }
   }
}
}
?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">



   <!-- latest compiled Javascript-->
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
      <li><a href="home.php">HOME </a></li>
      <li><a href="aboutus.php">ABOUT US</a></li>
      <li><a href="../http://nishetty1495.uta.cloud/uncategorized/biology/">BLOG</a></li>
      <li><a href="buyfromus.php">BUY FROM US</a></li>
      <li><a href="contact.php">CONTACT</a></li>
        <li><a href="signup.php">SIGN UP</a></li>
      <li><a href="login.php">LOGIN</a></li>
    </ul>

  </nav>

</header>
<body>
  <div class="decor">
     
   </div>
       
       <h3 align ="center">BUY FROM US</h3>
       <?php 
       $query ="SELECT * FROM product ORDER BY id ASC";
       $result = mysqli_query($conn,$query);
       if(mysqli_num_rows($result)>0)
       {
             while($row = mysqli_fetch_array($result))
             {

             ?>
            
             <div class="col-md-4">
               <form method="post" action="buyfromus.php?action=add&id=<?php echo $row['id'];?>">
                  
                 <div style ="border:1px solid #333; background-color:#f1f1f1; border-radius: 5px; padding:14px; float:left; " >
                  <div class="gallery">

                  <img src="<?php echo $row['image'];?>" class="img-responsive"/>
                   <div class="desc">
                  <h4 class="text-info"><?php echo $row['name'];?></h4>
                  <h4 class="text-danger">$<?php echo $row['price'];?></h4>
                  <input type="text" name="quantity" class="form-control" value="1">
                  <input type="hidden" name="hidden_name" value="<?php echo $row['name'];?>">
                  <input type="hidden" name="hidden_price" value="<?php echo $row['price'];?>">
                  
                  <input type ="submit" name="add_to_cart" style="margin-top: 5px;" class="btn btn-success" value="add to cart">
                  </div>
                  </div>
                  </div>
                  

             </form>
             </div>  
            
             <?php
             
             }
       }

       ?>



<div style="clear:both"></div>
<br>
<h3> Order Details<h3>
<div class="table responsive">
 <table clas="table table-bordered">
  <tr>
   <th width="25%">Item Name</th>
   <th width="5%">quantity</th>
   <th width="10%"> Price</th>
   <th width="10%">Total</th>
   <th width="5%">Action</th>

  </tr>
<?php
if(!empty($_SESSION["shopping_cart"]))
{
$total = 0;
foreach ($_SESSION["shopping_cart"] as $key => $values) 
{
  ?>
<tr>
  <td><?php echo $values['item_name']; ?></td>
  <td><?php echo $values['item_quantity']; ?></td>
  <td><?php echo $values['item_price']; ?></td>
  <td><?php echo number_format($values['item_quantity']* $values['item_price'],2); ?></td>
  <td>

<a href="buyfromus.php?action=delete&id=<?php echo $values['item_id']; ?>" class ="btn btn-danger">Remove</a>

  </td>

</tr>
<?php
$total = $total + ($values['item_quantity']* $values['item_price']);

}
?>

<tr>
  <td colspan="3" align="right">Total</td>
  <td align="right">$<?php echo number_format($total,2); ?></td>
</tr>
</table>




 <?php
}
 ?>   
<form action="ca.php" method="post">
  <input type="submit" name="submit" value="submit">
</form>

</body>

<div class="footer5">
  
<h2>View shopping cart</h2>
<button>Sumit</button>
<p>You can see the products that you have added to your cart</p>
</div>

<div class="footer">
<hr>
<p> Copyrigt &copy 2019 All rights reserved| The web is made  with &hearts;
    <span style="color:   #00FFFF">By DiazApps</span>
  </p>
</div>


</div>



</html>