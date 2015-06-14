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
						<li><a href="#"><span class="glyphicon glyphicon-log-in"></span><?php echo $lang['MENU_PRIJAVA']; ?></a></li>
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

        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

				<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
 <tr>
<form name="form1" method="post" action="checklogin.php">
 <td>
 <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
 <tr>
 <td colspan="3"><strong>Member Login </strong></td>
 </tr>
 <tr>
 <td width="78">Username</td>
 <td width="6">:</td>
 <td width="294"><input name="myusername" type="text" id="myusername"></td>
 </tr>
 <tr>
 <td>Password</td>
 <td>:</td>
 <td><input name="mypassword" type="password" id="mypassword"></td>
 </tr>
 <tr>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 <td><input type="submit" name="Submit" value="Login"></td>
 </tr>
 </table>
 </td>
</form>
 </tr>
 </table>

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
