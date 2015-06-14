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

<body>

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
                    <img src="http://placehold.it/150x50&text=Logo" alt="">
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
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
               <?php

 $host="localhost"; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="members"; // Table name 



// Connect to server and select databse.
 mysql_connect("localhost", "root", "root")or die("cannot connect"); 
 mysql_select_db("solidarnost")or die("cannot select DB");



// username and password sent from form 
 $myusername=$_POST['myusername']; 
 $mypassword=$_POST['mypassword']; 



// To protect MySQL injection (more detail about MySQL injection)
 $myusername = stripslashes($myusername);
 $mypassword = stripslashes($mypassword);
 $myusername = mysql_real_escape_string($myusername);
 $mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM korisnik WHERE korisnickoIme='$myusername' and lozinka='$mypassword'";
 $result=mysql_query($sql);

 
// Mysql_num_row is counting table row
 $count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
	 $admin = mysql_result(mysql_query("SELECT status FROM korisnik WHERE korisnickoIme='$myusername' LIMIT 1"),0);

// Register $myusername, $mypassword and redirect to file "login_success.php"
 $_SESSION['myusername']=$myusername;
 $_SESSION['mypassword']= $mypassword;
 $_SESSION['admin'] = $admin;
 header("location:login_success.php");
 }
 else {
 echo "Wrong Username or Password";
 }
 ?>


        </div>
        <!-- /.row -->


        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Solidarnost</p>
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
