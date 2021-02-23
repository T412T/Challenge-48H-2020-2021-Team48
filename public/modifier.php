<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    </head>
    <body>
<?php

$pdo5 = new PDO("mysql:host=localhost;dbname=data_image", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$result = $pdo5->query("SELECT * FROM image WHERE id_image = '$_GET[id]';");
$info = $result->fetch(PDO::FETCH_OBJ);
$pdo4 = new PDO("mysql:host=localhost;dbname=data_image", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$result3 = $pdo4->query("SELECT * FROM tag;");
$info3 = $result3->fetch(PDO::FETCH_OBJ);

if (!empty($_POST)) {
    //*********************************************** */
    // Insetion

    $_POST["tag1"] = htmlentities($_POST["tag"], ENT_QUOTES);
    $result = $pdo5->exec("UPDATE `image` SET `tag` = '$_POST[tag]',`tag2` = '$_POST[tag2]',`tag3` = '$_POST[tag3]'  WHERE id_image = '$_GET[id]';");

    echo "Donnée(s) Enregister";
    header('Refresh: 0');
    //*********************************************** */
}





        ?>

        <div class="starter-template">
          <form class="" action="" method="post">
              <select name="tag2" id="tag2">
                <option value="">--Please choose an option--</option>
                <option value="produit">produit</option>
                <option value="ambience">ambience</option>
              </select>

              <select name="tag" id="tag">
                <option value="">--Please choose an option--</option>
                <?php while($info3 = $result3->fetch(PDO::FETCH_OBJ)) {?>
                <option value="<?php echo $info3->tag;?>"><?php echo $info3->tag;?></option>
              <?php } $_POST["tag"] = htmlentities($_POST["tag"], ENT_QUOTES);?>
                <option value="goldfish">...</option>
              </select>

              <select name="tag3" id="tag3">
                <option value="">--Please choose an option--</option>
                <option value="horizontal">horizontal</option>
                <option value="vertical">vertical</option>
              </select>
            <button type="submit" class="btn btn-primary">Chercher</button>
            </body>
</html>
