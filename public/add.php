<!DOCTYPE html>
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
          <form method="post" action="">
              <div class="form-group">

                  <label for="titre">TAG</label>
                      <select name="tag2" id="tag2">
                        <option value="">--Please choose an option--</option>
                        <option value="produit">produit</option>
                        <option value="ambience">ambience</option>
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
