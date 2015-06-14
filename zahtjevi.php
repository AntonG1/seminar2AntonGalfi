<!DOCTYPE html>
<?php
include_once 'common.php';
 if(isset($_SESSION['admin'])){
 if($_SESSION['admin'] != '1')
header("location:index.php");}
if(!isset($_SESSION['admin'])){
header("location:index.php");}
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Solidarnost</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stil.css" rel="stylesheet">


</head>

<body style="background-image: url(img/steps.PNG);">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="img/logoSem2.png" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"><?php echo $lang['MENU_ONAMA']; ?></a>
                    </li>
					<li>
                        <a href="pomozi.php"><?php echo $lang['MENU_POMOZI']; ?></a>
                    </li>
                    <li>
                        <a href="pomoc.php"><?php echo $lang['MENU_POMOC']; ?></a>
                    </li>
					<li>
                        <a href="kontakt.php"><?php echo $lang['MENU_KONTAKT']; ?></a>
                    </li>
					<li>
						<a href="upiti.php"><?php 
						if (isset($_SESSION['admin'])){	
							if($_SESSION['admin'] == '1')
							echo 'Upiti';}
								?></a>
					</li>
					<li>
						<a href="zahtjevi.php"><?php 
						if (isset($_SESSION['admin'])){	
							if($_SESSION['admin'] == '1')
							echo 'Zahtjevi';}
								?></a>
					</li>
                </ul>
				 <ul class="nav navbar-nav navbar-right">
						<li><a href="regist.php"><span class="glyphicon glyphicon-user"></span><?php echo $lang['MENU_REGIST']; ?></a></li>
						<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span><?php echo $lang['MENU_PRIJAVA']; ?></a></li>
						<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span><?php echo $lang['MENU_ODJAVA']; ?></a></li>
						<li class="dropdown">
								<a class="glyphicon glyphicon-flag" data-toggle="dropdown" href="#">
								<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="pomozi.php?lang=hr">Hrvatski</a></li>
									<li><a href="pomozi.php?lang=en">English</a></li>
								</ul>
						</li>
				</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">ZAHTJEVI</h1>
            </div>
				<?php
				$con=mysqli_connect('localhost','root','root','solidarnost') or die('Error connecting to MySQL server.');
				$upit="SELECT * FROM zahtjev";
				$result = mysqli_query($con, $upit);
					
					
				while($row = mysqli_fetch_assoc($result)) {
					$idK=$row['idKorisnika'];
					$ime=$row['ime'];
					$prezime=$row['prezime'];
					$telefon=$row['telefon'];
					$email=$row['email'];
					$racun=$row['racun'];
					$cilj=$row['cilj'];
					$opis=$row['opis'];
					$status=$row['status'];
					$idz=$row['id'];
					echo '<div class="panel panel-default">';
					echo '<div class="panel-body">';
					echo "</br><b>Id korisnika:</b> $idK";
					echo "</br><b>Ime:</b> $ime";
					echo "</br><b>Prezime:</b> $prezime";
					echo "</br><b>Broj telefona:</b> $telefon";
					echo "</br><b>Email:</b> $email";
					echo "</br><b>Broj racuna za donacije:</b> $racun";
					echo "</br><b>Cilj: </b>$cilj";
					echo "</br><b>Opis:</b> $opis";
					echo "</br><b>Status(1-Odobreno, 0-Nije odobreno):</b> $status";
					echo "<form>";
					echo "<input type=\"button\" onclick=\"window.location.href='obrisiZahtjev.php?idz=$idz'\" value=\"Obriši\">";
					echo "<input type=\"button\" onclick=\"window.location.href='odobriZahtjev.php?idz=$idz'\" value=\"Odobri\">";
					echo "</form>";
					echo "<br>";
					echo '</div>';
					echo '</div>';
					 }

				mysqli_close($con);
				?> 
				
				
        </div>


        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <center>Copyright &copy; Solidarnost</center>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
