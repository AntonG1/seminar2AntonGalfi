<?php

				$idz = $_GET['idz'];
				$con=mysqli_connect('localhost','root','root','solidarnost') or die('Error connecting to MySQL server.');
				$upit="DELETE FROM zahtjev WHERE id = '$idz'";
				$result = mysqli_query($con, $upit);
				mysqli_close($con);
				header("location:zahtjevi.php");
?>