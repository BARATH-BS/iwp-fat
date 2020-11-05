<?php

$item = $_POST['itemid'];
include ("connection.php");
$sql_add = "DELETE FROM products WHERE itemid='$item'";
$connect->query($sql_add);
echo "Removed from Products";
?>
<br><br>
<button type="button"><?php echo '<a href="showproducts.php">View Products</a>'; ?></button><br><br>
