<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<?php
$pdo5 = new PDO("mysql:host=localhost;dbname=data_image", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$result = $pdo5->query("SELECT * FROM image;");
$result2 = $pdo5->query("SELECT * FROM image;");
$info = $result->fetch(PDO::FETCH_OBJ);?>
    <head>

    </head>
    <body>
      <a href="tag.php?tag=<?php echo $info->tag ?>"><button type="button" name="button">tag viande</button></a>


      <?php while($info2 = $result2->fetch(PDO::FETCH_OBJ)) {?>
      <img src="<?php echo $info2->link;?>" alt="img">
      <?php }?>
    </body>
</html>
