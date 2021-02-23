<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

		<title>Compass Starter by Ariona, Rian</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">

		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>

		<div class="site-content">
			<div class="site-header">
				<div class="container">
					<a href="index.html" class="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-type">
							<h1 class="site-title">nom</h1>

						</div>
					</a>

					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item current-menu-item"><a href="index.php">Home</a></li>
							<li class="menu-item"><a href="add.php">image</a></li>

						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>

				</div>
			</div> <!-- .site-header -->

			<main class="main-content">


				<div class="fullwidth-block">


    <div class="container">
<div class="row" style="margin-bottom:220px;">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    </head>
    <body>
      <?php
      $pdo5 = new PDO("mysql:host=localhost;dbname=data_image", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
      $result = $pdo5->query("SELECT * FROM image  WHERE tag = '$_GET[tag]' and tag2 = '$_GET[tag2]' and tag3 = '$_GET[tag3]';");
      while($info = $result->fetch(PDO::FETCH_OBJ)) {?>
        <div class="col-md-3 col-sm-6">
          <div class="live-camera" >
      <img src="<?php echo $info->link;?>" alt="img" style="width:300px; height:200px; padding-right: 50px;">
      <?php echo '<p><a href="download.php?file=' . urlencode($info->name) . '">Download</a></p>';?>

      								</div>
      							</div>
      <?php }?>
    </body>
</html>
