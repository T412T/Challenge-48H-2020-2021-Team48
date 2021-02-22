<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    </head>
    <body>
      <button type="button" name="button">tag viande</button>
      <?php
      $pdo5 = new PDO("mysql:host=localhost;dbname=data_image", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
      $result = $pdo5->query("SELECT * FROM image  WHERE tag = '$_GET[tag]';");
      while($info = $result->fetch(PDO::FETCH_OBJ)) {?>
      <img src="<?php echo $info->link;?>" alt="img">
      <?php echo '<p><a href="download.php?file=' . urlencode($info->name) . '">Download</a></p>';?>
      <?php }?>
    </body>
</html>
