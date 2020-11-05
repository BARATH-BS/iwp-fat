<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>View Cart Items</title>
  </head>
  <body>
    <h1>View Cart Items</h1>
    <?php
    $user=$_POST['userid'];
    include ("connection.php");
    $sql="SELECT * FROM cart WHERE userid='$user'";
    $avail=$connect->query($sql);
    while ($row=$avail->fetch_assoc())
    {
      echo "<hr><hr><br><br>";
      ?>
      ITEM ID: <input type="text" name="itemid" value="<?php echo $row['itemid']; ?>" readonly> <br><br>
      ITEM NAME: <input type="text" name="itemname" value="<?php echo $row['itemname']; ?>" readonly> <br><br>
      NUMBER OF ITEMS<input type="number" name="quantity" value="<?php echo $row['quantity']; ?>" readonly> <br><br>
      COST PER ITEM<input type="text" name="totalcost" value="<?php echo $row['totalcost']; ?>" readonly> <br><br><hr>
<?php
    }
     ?>
     <form action="checkout.php" method="post">
       <input type="text" name="userid" value="<?php echo $user; ?>"><br><br>
       <input type="submit" name="check" value="Check out">
     </form>
  </body>
</html>
