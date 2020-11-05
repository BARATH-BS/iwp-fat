<?php
$item=$_POST['itemid'];
$userid= $_POST['userid'];
$quantity=$_POST['quantity'];
$cartquantity=$_POST['cartquantity'];
$unitcost=$_POST['unitcost'];
$itemname=$_POST['itemname'];
include ("connection.php");
if(((int)$quantity)>=((int)$cartquantity))
{
  $totalcost = (((int)$cartquantity)*((int)$unitcost));
  $sql_add = "INSERT INTO cart (itemid, userid, quantity, totalcost, itemname) VALUES ('$item','$userid','$cartquantity','$totalcost','$itemname')";
  $connect->query($sql_add);
  $remquan = ((int)$quantity - (int)$cartquantity);
  $update_sql="UPDATE products SET quantity='$remquan' WHERE itemid='$item'";//sql query to update number of seats in availability table
  $connect->query($update_sql);
  echo "item added to cart";
}
else
{
  echo $cartquantity." these many items not available";
}
 ?>
 <br><br>
  <button type="button"><?php echo '<a href="viewcart.php">View Cart</a>'; ?></button><br><br>
  <button type="button"><?php echo '<a href="showproducts.php">View Products</a>'; ?></button><br><br>
