<!DOCTYPE HTML>
<link rel="stylesheet" type="text/css" href="style.css">
<?php
$dbc = mysqli_connect("localhost","abc","stuti","dbproject") OR die('Error: '.mysqli_connect_error());
if ($dbc->connect_error) {
    die("Connection failed: " . $dbc->connect_error);
} 
//echo "Connected successfully";
    
if(!empty($_POST["userid"])) 
	{ 
	$username = $_POST['name']; 
	$email = $_POST['email'];
	$phone=$_POST['phone'];
	$selectOption = $_POST['utype'];
	$userid = $_POST['userid'];
	$password = $_POST['pass'];
	$DOB=$_POST['DOB'];
	echo $selectOption;
	if($selectOption=="PREMIUM")
	{?>
<html> 
<head>
 <title>Payment Completion</title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Jquery CSS -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">

<!-- font-awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<!-- Jquery -->
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
 
 <!-- Jquery UI -->
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

 </head> 
<body>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Jquery CSS -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">

<!-- font-awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<!-- Jquery -->
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
 
 <!-- Jquery UI -->
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

 </head> 
 <body>
 <div id="Sign-In"> 
 <fieldset style="width:30%">
 <legend>COMPLETE PAYMENT</legend> </fieldset>
 <form method="POST" action="connectivity.php"> 
 Bank-name <br><input type="text" name="bank" size="40"><br>
 Card Number <br><input type="text" name="cnum" size="40"><br>
 Expiry-Date <br><input type="date" name="doe" size="40"><br>
 <a href="http://localhost/project/psuccess.html"><h3>Click to Pay</h3></a>
 </form> 
 </fieldset> 
 </div> 
 </body> 
 </html> 


	
<?php				
	}
	else{?>
		<html> 
<head>
 <title>Vidcafe|Login</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Jquery CSS -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">

<!-- font-awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<!-- Jquery -->
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
 
 <!-- Jquery UI -->
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

 </head> 
 <body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://localhost/project/unsigneduphome.html"><button type="button" class="btn btn-primary btn-lg active"><i class="fa fa-home"></i>HOME</button></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
<i class="fa fa-search"></i>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
<li><a href="http://localhost/project/aboutus.html"><button type="button" class="btn btn-primary">ABOUT US</button></a></li>


<li><a href="http://localhost/project/contactus.html"><button type="button" class="btn btn-success"><i class="fa fa-phone"></i> CONTACT US</button></a></li>
<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><button type="button" class="btn btn-warning"><i class="fa fa-sign-in"></i> SIGN IN</button> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://localhost/series/dynamic/login.php"><button type="button" class="btn btn-info"><i class="fa fa-sign-in"></i> USER</button></a></li>
 <li><a href="http://localhost/project/Employee.html"><button type="button" class="btn btn-info"><i class="fa fa-sign-in"></i> EMPLOYEE</button></a></li>  </ul>

            
            <li role="separator" class="divider"></li>
        </li>


        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><button type="button" class="btn btn-warning"><i class="fa fa-language"></i> LANGUAGE</button> </a>
          <ul class="dropdown-menu">
            <li><a href="#">English</a></li>

            
            <li role="separator" class="divider"></li>
          
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<h1>
<!--<a class="btn btn-lg btn-success" href="#">-->
  <i class="fa fa-caret-square-o-right fa-2x"></i><br><font face="Jokerman" color="black">  VIDCAFE</font><i class="fa fa-cog fa-spin"></i></h1>
<i class="fa fa-quote-left fa-1x fa-pull-left fa-border"></i>
<strong>THE HUB OF VIDEOS..</strong>
<i class="fa fa-quote-right fa-1x fa-pull-center fa-border"></i>
 <div id="Sign-In"> 
 <fieldset style="width:30%">
 <legend><button type="button" class="btn btn-danger btn-lg">LOG-IN HERE</button></legend> </fieldset>
 <form method="POST" action="connectivity.php"> 
 <i class="fa fa-user fa-lg"></i><strong>USERNAME</strong> <br><input type="text" name="userid" size="40"><br>
 <i class="fa fa-star fa-lg"></i><strong>PASSWORD</strong><br><input type="password" name="pass" size="40"><br>
 <left><input id="button" type="submit" name="submit" value="Log-In"></left>
 </form> 
 <p><a href="http://localhost/project/signup.html">Not a member? join us today</a></p>
 </fieldset> 
 </div> 

  </nav><nav class="navbar navbar-left navbar-fixed-bottom">
  <div class="container">
 
 <a href="http://localhost/project/music.php" class="btn btn-danger btn-lg active  btn-lg " role="button"><i class="fa fa-music"></i><strong> MUSIC MANIA</strong></a>
 <a href="http://localhost/project/web.html" class="btn btn-primary btn-lg active  btn-lg " role="button"><i class="fa fa-forward"></i><strong> WEBSERIES</strong></a>
 <a href="http://localhost/project/news.html" class="btn btn-danger btn-lg active  btn-lg " role="button"><i class="fa fa-newspaper-o"></i><strong> NEWS.TV</strong></a>
 <a href="http://localhost/project/video.html" class="btn btn-primary btn-lg active  btn-lg " role="button"><i class="fa fa-youtube-play"></i><strong> VIDDLER</strong></a>
  <a href="https://twitter.com/?lang=en" class="btn btn-danger btn-lg active  btn-lg " role="button"><i class="fa fa-twitter fa-1x"></i><strong> TWITTER</strong></a>
    <a href="https://www.facebook.com/" class="btn btn-primary btn-lg active  btn-lg " role="button"><i class="fa fa-facebook-official"></i><strong> FACEBOOK</strong></a>
 </body> 
 </html> 
<?php
	}
			$data = mysqli_query($dbc,"INSERT INTO users(user_id, username, password, email_id, phone_no, DOB, utype) VALUES ('$userid','$username','$password','$email','phone','$DOB','$selectOption')");
				
			/*if($data) 
				{ 
					echo "YOUR REGISTRATION IS COMPLETED...";
					
				} 
		
			else 
			{ 
				echo "SORRY...YOU ARE ALREADY REGISTERED USER..."; 
			} */
	}
mysqli_close($dbc);
?>