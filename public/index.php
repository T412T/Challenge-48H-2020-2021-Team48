<?php ini_set('display_errors','off'); ?>
<?php

$pdo5 = new PDO("mysql:host=localhost;dbname=data_image", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$result = $pdo5->query("SELECT * FROM image;");
$result2 = $pdo5->query("SELECT * FROM image;");
$info = $result->fetch(PDO::FETCH_OBJ);
$pdo4 = new PDO("mysql:host=localhost;dbname=data_image", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$result3 = $pdo4->query("SELECT * FROM tag;");
$info3 = $result3->fetch(PDO::FETCH_OBJ);
?>
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
							<li class="menu-item current-menu-item"><a href="index.html">Home</a></li>
							<li class="menu-item"><a href="add.php">image</a></li>
							<li class="menu-item"><a href="live-cameras.html">tag</a></li>

						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>

				</div>
			</div> <!-- .site-header -->

			<main class="main-content">


				<div class="fullwidth-block">



	<div class="container">

    <select name="pets" id="pet-select">
      <option value="">--Please choose an option--</option>
      <option value="dog">produit</option>
      <option value="cat">ambience</option>
    </select>
<form class="" action="tag.php?tag=<?php echo $_POST['tag']?>">
    <select name="tag" id="tag">
      <option value="">--Please choose an option--</option>
      <?php while($info3 = $result3->fetch(PDO::FETCH_OBJ)) {?>
      <option value="<?php echo $info3->tag;?>"><?php echo $info3->tag;?></option>
    <?php } $_POST["tag"] = htmlentities($_POST["tag"], ENT_QUOTES);?>
      <option value="goldfish">...</option>
    </select>
  <button type="submit" class="btn btn-primary">Chercher</button>

</form>
		<h2 class="section-title" style="margin-top: 50px;">Image</h2>

						<div class="row">


                <?php while($info2 = $result2->fetch(PDO::FETCH_OBJ)) {?>

							<div class="col-md-3 col-sm-6">
								<div class="live-camera">

                  <img src="<?php echo $info2->link;?>" alt="img" style="width:300px; height:200px; padding-right: 20px;">
                  <?php echo '<p><a href="download.php?file=' . urlencode($info2->name) . '">Download</a></p>';?>
                  <?php echo '<p><a href="modifier.php?id=' . urlencode($info2->id_image) . '">Modif</a></p>';?>

								</div>
							</div>
              <?php }?>
					</div>

				</div>
      </div>
			</main> <!-- .main-content -->



		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>

	</body>

</html>
