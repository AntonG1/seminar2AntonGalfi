<?php
	$idz = $_GET['idz'];
	$con=mysqli_connect('localhost','root','root','solidarnost') or die('Error connecting to MySQL server.');
	$upit="UPDATE zahtjev SET status=1 WHERE id = '$idz'";
	$result = mysqli_query($con, $upit);
	mysqli_close($con);
	header("location:zahtjevi.php");
?>