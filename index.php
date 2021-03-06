<!DOCTYPE html>
<?php include 'includes/functions.php' ?>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Goldshub</title>
		<meta name="description" content="">
		<meta name="author" content="user">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<link rel="stylesheet" href="includes/themes/goldshub.css" />
		<link rel="stylesheet" href="includes/themes/jquery.mobile.icons.min.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
		<link rel="stylesheet" href="includes/style.css" />
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

	</head>

<body>
	<!-- Home Page -->
	<div data-role="page" id="home" data-theme="a">
		<!-- Panel -->
		<div data-role="panel" id="my-panel">
			<ul data-role="listview">
				<li data-role="list-divider"><?php is_loggedin() ?>
  				<li><a href="#">Latest Questions</a></li>
  				<li><a href="#">My Question</a></li>
  				<li><a href="#">Settings</a></li>
  				<li><a href="#">About Us</a></li>
			</ul>
		</div>
		<!-- End Panel -->
		
		<!-- Header -->
		<div data-role="header">
			<a href="#my-panel" data-rel="back" class="ui-btn ui-icon-bars ui-btn-icon-notext ui-nodisc-icon ui-corner-all" ></a>
			<h1 class="ui-title" role="heading">GoldHub</h1>
			<a href="#home" class="ui-btn ui-icon-home ui-btn-icon-notext ui-nodisc-icon ui-corner-all" ></a>
		</div>
		<!-- End Header -->

		
		<!-- Main Content -->
		<div class="ui-content">
			<h2 style="text-align: center">Learn about Goldsmiths the quick and easy way!</h2>
			<a href="#ask-question" class="ui-btn ui-icon-arrow-r ui-btn-icon-right ui-corner-all">Ask a question</a>
			<a href="#help-friends" class="ui-btn ui-icon-arrow-r ui-btn-icon-right ui-corner-all">Help your friends!</a>
			<?php if(isset($_SESSION['currentUser'])){
				print '<br /><p style="text-align:center">Hello ' . $_SESSION['currentUser'] . '</p>';
			} ?>
		</div>
		
		<!-- End Main Content -->
		
		<!-- Footer -->
		<div data-role="footer" data-position="fixed" style="text-align: center">
    			<a href="#settings" class="ui-btn ui-icon-gear ui-btn-icon-notext ui-nodisc-icon ui-corner-all" ></a>
		</div>
		<!-- End Footer -->
	  </div>
	  <!-- End of Home Page -->
	
	
		
	
	<!-- Log In -->
	<div data-role="page" id="log-in">
		<div data-role="panel" id="my-panel">
			<ul data-role="listview">
				<li data-role="list-divider"><a href="#log-in" class="ui-btn ui-icon-user ui-btn-icon-left ui-nodisc-icon">Log In</a></li>
  				<li><a href="#">Latest Questions</a></li>
  				<li><a href="#">My Question</a></li>
  				<li><a href="#">Settings</a></li>
  				<li><a href="#">About Us</a></li>
			</ul>
		</div>
		<div data-role="header">
			<a href="#my-panel" class="ui-btn ui-icon-bars ui-btn-icon-notext ui-nodisc-icon ui-corner-all" ></a>
			<h1>Log In</h1>
			<a href="#home" class="ui-btn ui-icon-home ui-btn-icon-notext ui-nodisc-icon ui-corner-all" ></a>
		</div>
		<div class="ui-content">
			<form action="loginhandler.php" method="post" data-ajax="false">
				<label for="email">Email Address:</label>
				<input type="text" name="email" id="email" placeholder="(e.g cuser001@gold.ac.uk)" />
				<label for="password">Password:</label>
				<input type="password" name="password" id="password" placeholder="" />
				<input type="submit" name="submitLogin" id="submit" value="Log In" />
			</form>
			<a href="#"><p style="float: right">Forgot Login?</p></a>
		</div>
		<div data-role="footer" data-position="fixed" style="text-align: center">
    			<a href="#settings" class="ui-btn ui-icon-gear ui-btn-icon-notext ui-nodisc-icon ui-corner-all" ></a>
		</div>
	</div>
	<!-- End Login -->
	
	<!-- Ask a question -->
	<div data-role="page" id="ask-question">
		<div data-role="panel" id="my-panel">
			<ul data-role="listview">
				<li data-role="list-divider"><a href= class="ui-btn ui-icon-user ui-btn-icon-left ui-nodisc-icon">Log In</a></li>
  				<li><a href="#">Latest Questions</a></li>
  				<li><a href="#">My Question</a></li>
  				<li><a href="#">Settings</a></li>
  				<li><a href="#">About Us</a></li>
			</ul>
		</div>
		<div data-role="header">
			<a href="#my-panel" class="ui-btn ui-icon-bars ui-btn-icon-notext ui-nodisc-icon ui-corner-all" ></a>
			<h1>Ask a question</h1>
			<a href="#home" class="ui-btn ui-icon-home ui-btn-icon-notext ui-nodisc-icon ui-corner-all" ></a>
		</div>
		<?php create_form(); ?>
		<div data-role="footer" data-position="fixed" style="text-align: center">
    			<a href="#settings" class="ui-btn ui-icon-gear ui-btn-icon-notext ui-nodisc-icon ui-corner-all" ></a>
		</div>
	</div>
	<!-- End question -->
	
	<!-- Help Friends -->
	<div data-role="page" id="help-friends">
		<div data-role="panel" id="my-panel">
			<ul data-role="listview">
				<li data-role="list-divider"><a href="#log-in" class="ui-btn ui-icon-user ui-btn-icon-left ui-nodisc-icon">Log In</a></li>
  				<li><a href="#">Latest Questions</a></li>
  				<li><a href="#">My Question</a></li>
  				<li><a href="#">Settings</a></li>
  				<li><a href="#">About Us</a></li>
			</ul>
		</div>
		<div data-role="header">
			<a href="#my-panel" class="ui-btn ui-icon-bars ui-btn-icon-notext ui-nodisc-icon ui-corner-all" ></a>
			<h1>Help Collegues</h1>
			<a href="#home" class="ui-btn ui-icon-home ui-btn-icon-notext ui-nodisc-icon ui-corner-all" ></a>
		</div>
		<div class="ui-content">
			<?php include 'getquestions.php';?>
		</div>
	</div>
	<!-- End Help Friends -->
	
	<!-- Single Question -->
	<div data-role="page" id="single-question">
		<div data-role="panel" id="my-panel">
			<ul data-role="listview">
				<li data-role="list-divider"><a href="#log-in" class="ui-btn ui-icon-user ui-btn-icon-left ui-nodisc-icon">Log In</a></li>
  				<li><a href="#">Latest Questions</a></li>
  				<li><a href="#">My Question</a></li>
  				<li><a href="#">Settings</a></li>
  				<li><a href="#">About Us</a></li>
			</ul>
		</div>
		<div data-role="header">
			<a href="#my-panel" class="ui-btn ui-icon-bars ui-btn-icon-notext ui-nodisc-icon ui-corner-all" ></a>
			<h1>Help out!</h1>
			<a href="#home" class="ui-btn ui-icon-home ui-btn-icon-notext ui-nodisc-icon ui-corner-all" ></a>
		</div>
		<div class="ui-content">
		    <!-- Single question goes here? -->
			<div style="text-align: center" data-role="controlgroup" data-type="horizontal">
			<h6>Rate this question?</h6>
			<a href="#" class="ui-btn ui-icon-arrow-u ui-btn-icon-notext ui-nodisc-icon ui-corner-all" ></a>
			<a href="#" class="ui-btn ui-icon-arrow-d ui-btn-icon-notext ui-nodisc-icon ui-corner-all" ></a>
		</div>
		</div>
	</div>
	<!-- End Single Question -->
	
	<!-- Settings -->
	<div data-role="page" id="settings">
		<div data-role="panel" id="my-panel">
			<ul data-role="listview">
				<li data-role="list-divider"><a href="#log-in" class="ui-btn ui-icon-user ui-btn-icon-left ui-nodisc-icon">Log In</a></li>
  				<li><a href="#">Latest Questions</a></li>
  				<li><a href="#">My Question</a></li>
  				<li><a href="#">Settings</a></li>
  				<li><a href="#">About Us</a></li>
			</ul>
		</div>
		<div data-role="header">
			<a href="#my-panel" class="ui-btn ui-icon-bars ui-btn-icon-notext ui-nodisc-icon ui-corner-all" ></a>
			<h1>Settings</h1>
			<a href="#home" class="ui-btn ui-icon-home ui-btn-icon-notext ui-nodisc-icon ui-corner-all" ></a>
		</div>
		<div class="ui-content">
			<label><input type="checkbox" />Notification Sounds</label>
			<label><input type="checkbox" />Push Notifications</label>
		</div>
		<div data-role="footer" data-position="fixed" style="text-align: center">
    			<a href="#settings" class="ui-btn ui-icon-gear ui-btn-icon-notext ui-nodisc-icon ui-corner-all" ></a>
		</div>
	</div>
</body>
</html>