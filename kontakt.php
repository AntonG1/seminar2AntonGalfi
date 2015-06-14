<!DOCTYPE html>
<?php
include_once 'common.php';
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
									<li><a href="kontakt.php?lang=hr">Hrvatski</a></li>
									<li><a href="kontakt.php?lang=en">English</a></li>
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
                <h3><?php echo $lang['KON_KONT']; ?></h3>
				<div class="col-md-2">
                <a href="blog-post.html">
                    <img class="img-responsive img-hover" src="img/avatar.PNG" alt="">
                </a>
            </div>
            <div class="col-md-2" style="background-color: white;">
				<br>
                <p>Anton Galfi</p>
				<p>098 435 2356</p>
				<p>anton.galfi@solidarnost.com</p>
            </div>
			<div class="col-md-2" >
                <a href="blog-post.html">
                    <img class="img-responsive img-hover" src="img/avatar.PNG" alt="">
                </a>
            </div>
            <div class="col-md-2"  style="background-color: white;">
				<br>
                <p>Darko Marko</p>
				<p>098 733 7426</p>
				<p>darko.marko@solidarnost.com</p>
            </div>
			</div>
			<hr><br>
                <form name="sentMessage" id="contactForm" method="POST" action="unesi_upit.php">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label><?php echo $lang['KON_IME']; ?></label>
                            <input type="text" class="form-control" name="ime" id="name" required data-validation-required-message="Please enter your full name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label><?php echo $lang['KON_MAIL']; ?></label>
                            <input type="email" class="form-control" name="email" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label><?php echo $lang['KON_UPIT']; ?></label>
                            <textarea rows="10" cols="100" name="upit" class="form-control" id="message" required data-validation-required-message="Please enter your message" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary"><?php echo $lang['KON_POSL']; ?></button>
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
