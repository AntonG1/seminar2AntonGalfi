<!DOCTYPE html>
<?php
include_once 'common.php';
if(isset($_SESSION['myusername']) ){
header("location:prijavljen.php");
 }
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
                </ul>
				 <ul class="nav navbar-nav navbar-right">
						<li><a href="regist.php"><span class="glyphicon glyphicon-user"></span><?php echo $lang['MENU_REGIST']; ?></a></li>
						<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span><?php echo $lang['MENU_PRIJAVA']; ?></a></li>
						<li class="dropdown">
								<a class="glyphicon glyphicon-flag" data-toggle="dropdown" href="#">
								<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="regist.php?lang=hr">Hrvatski</a></li>
									<li><a href="regist.php?lang=en">English</a></li>
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

        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-8">
                <h3><?php echo $lang['REG']; ?></h3>
                <form name="sentMessage" id="contactForm" method="POST" action="unesi_korisnika.php">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label><?php echo $lang['KORIS']; ?></label>
                            <input type="text" class="form-control" name="koris" maxlength="15" required data-validation-required-message>
                            <p class="help-block"></p>
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
                            <label><?php echo $lang['PASS']; ?></label>
                            <input type="text" class="form-control" maxlength="15" name="pass" required data-validation-required-message>
                            <p class="help-block"></p>
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
                            <label><?php echo $lang['IME']; ?></label>
                            <input type="text" class="form-control" name="ime" required data-validation-required-message>
                            <p class="help-block"></p>
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
                            <label><?php echo $lang['PREZ']; ?></label>
                            <input type="text" class="form-control" name="prezime" required data-validation-required-message>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label><?php echo $lang['TEL']; ?></label>
                            <input type="text" class="form-control" name="tel" required data-validation-required-message>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label><?php echo $lang['MAIL']; ?></label>
                            <input type="text" class="form-control" name="email" required data-validation-required-message>
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
                            <label><?php echo $lang['GRAD']; ?></label>
                            <input type="text" class="form-control" name="grad" required data-validation-required-message>
                            <p class="help-block"></p>
                        </div>
                    </div>
					                    <div class="control-group form-group">
                    <div class="controls">
                            <label><?php echo $lang['ULICA']; ?></label>
                            <input type="text" class="form-control" name="ulica" required data-validation-required-message>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><?php echo $lang['POTVRDI']; ?></button>
                </form>
            </div>

        </div>
        <!-- /.row -->


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
