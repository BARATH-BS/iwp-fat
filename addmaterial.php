<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add material</title>
  </head>
  <body>
    <center>
      <h1>Product Details</h1>
      <form  action="insertdb.php" method="post">
        <input type="text" name="itemid" placeholder="Item id" required> <br><br>
        <input type="text" name="itemname" placeholder="Item name" required> <br><br>
        <input type="number" name="quantity" placeholder="Number of items" required> <br><br>
        <input type="text" name="unitcost" placeholder="Cost per item" required> <br><br>
        <input type="submit" name="add" value="ADD TO MATERIAL">
      </form>
    </center>
  </body>
</html>
