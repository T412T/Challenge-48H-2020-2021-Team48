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
					<a href="https://www.passionfroid.fr/" class="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-type">
							<h1 class="site-title">Passion froid</h1>

						</div>
					</a>

					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index.php">Home</a></li>
							<li class="menu-item current-menu-item"><a href="add.php">image</a></li>

						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>

				</div>
			</div> <!-- .site-header -->

			<main class="main-content">


				<div class="fullwidth-block">



	<div class="container">
<?php
$pdo4 = new PDO("mysql:host=localhost;dbname=data_image", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$result3 = $pdo4->query("SELECT * FROM tag;");
$info3 = $result3->fetch(PDO::FETCH_OBJ);
?>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    </head>
    <body>
      <div class="starter-template">
          <form method="post" action="" style="margin-bottom:360px;">
              <div class="form-group">

                  <label for="titre">TAG</label>
                      <select name="tag2" id="tag2">
                        <option value="">--Please choose an option--</option>
                        <option value="produit">produit</option>
                        <option value="ambience">ambiance</option>
                      </select>

                      <select name="tag" id="tag">
                        <option value="">--Please choose an option--</option>
                        <?php while($info3 = $result3->fetch(PDO::FETCH_OBJ)) {?>
                        <option value="<?php echo $info3->tag;?>"><?php echo $info3->tag;?></option>
                      <?php }?>
                        <option value="goldfish">...</option>
                      </select>

                      <select name="tag3" id="tag3">
                        <option value="">--Please choose an option--</option>
                        <option value="horizontal">horizontal</option>
                        <option value="vertical">vertical</option>
                      </select>
                      <br>

                  <label for="titre">Image</label>
                  <input type="file" class="form-control" id="img" name="img">
              </div>

              <button type="submit" class="btn btn-primary">Enregister</button>

          </form>
          <?php


          if (!empty($_POST)) {
              //*********************************************** */
              // Insetion
              $pdo1 = new PDO("mysql:host=localhost;dbname=data_image", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
              $_POST["name1"] = htmlentities($_POST["tag"], ENT_QUOTES);
              $_POST["tag21"] = htmlentities($_POST["tag2"], ENT_QUOTES);
              $_POST["tag31"] = htmlentities($_POST["tag3"], ENT_QUOTES);
              $_POST["img1"] = htmlentities($_POST["img"], ENT_QUOTES);
              $pdo1->exec("INSERT INTO image (tag, tag2, tag3, name, link) VALUES ('$_POST[tag]', '$_POST[tag2]', '$_POST[tag3]', '$_POST[img]', 'Img/$_POST[img]');");

              echo "Donnée(s) Enregister";
              header('Refresh: 0');
              //*********************************************** */
          }


          ?>
    </body>
</html>
