<?php
	$idu = $_GET['idu'];
	$con=mysqli_connect('localhost','root','root','solidarnost') or die('Error connecting to MySQL server.');
	$upit="DELETE FROM upit WHERE id = '$idu'";
	$result = mysqli_query($con, $upit);
	mysqli_close($con);
	header("location:upiti.php");
?> 
				

