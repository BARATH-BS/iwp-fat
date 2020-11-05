<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add to db</title>
  </head>
  <body>
    <center>
      <br><br>
    <?php
    $item=$_POST['itemid'];
    $name=$_POST['itemname'];
    $quantity=$_POST['quantity'];
    $unitcost=$_POST['unitcost'];
    include ("connection.php");
    $sql="SELECT itemid FROM products WHERE itemid='$item'";
    $content=$connect->query($sql);
    if(mysqli_num_rows($content)!=0)
    {
      ?>
      <?php echo $item.", this itemid is already used, so item not added to products"; ?></div><br><br><br>
      <?php
    }
    else
    {
      $sql_add = "INSERT INTO products (itemid, itemname, quantity, cost) VALUES ('$item','$name','$quantity','$unitcost')";
      $connect->query($sql_add);
      echo "Item added to products";
    }
   ?>
   <br><br>
    <button type="button"><?php echo '<a href="addmaterial.php">Click here to add material</a>'; ?></button><br><br>
  </center>
  </body>
</html>
