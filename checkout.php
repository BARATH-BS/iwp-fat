<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Check Out</title>
  </head>
  <body>
    <h1>Check Out</h1>
    <?php
    $user=$_POST['userid'];
    $cartvalue=0;
    date_default_timezone_set("Asia/Calcutta");
    $tim=date("h:i:sa");
    $p1=date("Y:m:d").":";
    $p2=substr($tim,0,8);
    $invoice=$p1.$p2;
    $itemids="";
    include ("connection.php");
    $sql="SELECT * FROM cart WHERE userid='$user'";
    $avail=$connect->query($sql);
    while ($row=$avail->fetch_assoc())
    {
      $cartvalue=$cartvalue+(int)$row['totalcost'];
      $itemids=$itemids.$row['itemid'].":";
    }
    $sql_add = "INSERT INTO checkout (userid, invoice, totalcost, item_ids) VALUES ('$user','$invoice','$cartvalue','$itemids')";
    $connect->query($sql_add);
    echo "Checked Out";
    echo "<br>cart value ".$cartvalue;
    echo "<br>Invoice ".$invoice;
     ?>
     <br><br>
     <button type="button"><?php echo '<a href="showproducts.php">View Products</a>'; ?></button><br><br>
  </body>
</html>
