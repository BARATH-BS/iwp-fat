<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete</title>
  </head>
  <body>
    <h1>DELETE</h1>
    <?php
    include ("connection.php");
    $sql="SELECT * FROM products";
    $avail=$connect->query($sql);
    while ($row=$avail->fetch_assoc())
    {
      echo "<hr><hr><br><br>";
      ?>
      <form  action="deletedb.php" method="post">
        ITEM ID: <input type="text" name="itemid" value="<?php echo $row['itemid']; ?>" readonly> <br><br>
        ITEM NAME: <input type="text" name="itemname" value="<?php echo $row['itemname']; ?>" readonly> <br><br>
        NUMBER OF ITEMS IN STOCK<input type="number" name="quantity" value="<?php echo $row['quantity']; ?>" readonly> <br><br>
        COST PER ITEM<input type="text" name="unitcost" value="<?php echo $row['cost']; ?>" readonly> <br><br>
        <input type="submit" name="cart" value="DELETE">
      </form>
      <br><br>
      <?php
    }
      ?>

  </body>
</html>
