<?php require_once 'includes/initialize.php'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Goldshub</title>
		<meta name="description" content="">
		<meta name="author" content="user">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<link rel="stylesheet" href="stylesheets/themes/goldshub.css" />
		<link rel="stylesheet" href="stylesheets/themes/jquery.mobile.icons.min.css" />
		<link rel="stylesheet" href="stylesheets/style.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

	</head>

<body>
	<div data-role="page" data-theme="a">
		<!-- Panel -->
		<div data-role="panel" id="my-panel">
			<ul data-role="listview">
				<li data-role="list-divider"><?php if($session->is_logged_in()) { echo '<a href="logout.php" class="ui-btn ui-icon-user ui-btn-icon-left ui-nodisc-icon">Log Out</a>';}
                else { echo '<a href="login.php" class="ui-btn ui-icon-user ui-btn-icon-left ui-nodisc-icon">Log In</a>'; }  ?>
  				<li><a href="#">Latest Questions</a></li>
  				<li><a href="#">My Question</a></li>
  				<li><a href="settings.php">Settings</a></li>
  				<li><a href="#">About Us</a></li>
			</ul>
		</div>
		<!-- End Panel -->
		
		<!-- Header -->
		<div data-role="header">
			<a href="#my-panel" data-rel="back" class="ui-btn ui-icon-bars ui-btn-icon-notext ui-nodisc-icon ui-corner-all" ></a>
			<h1 class="ui-title" role="heading"><?php if (defined("HEADING")) { echo constant("HEADING");} else { echo 'GoldHub'; } ?></h1>
			<a href="index.php" class="ui-btn ui-icon-home ui-btn-icon-notext ui-nodisc-icon ui-corner-all" ></a>
		</div>
		<!-- End Header -->