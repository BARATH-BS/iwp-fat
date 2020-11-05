<?php
		$connect = mysqli_connect("localhost", "root" , "", "shopping");
    if(! $connect )
    {
      die('Could not connect: ' . mysql_error());
    }
?>
