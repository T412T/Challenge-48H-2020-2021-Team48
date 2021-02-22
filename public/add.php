<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    </head>
    <body>
      <div class="starter-template">
          <form method="post" action="">
              <div class="form-group">
                  <label for="titre">Nom Image</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="XXX">
                  <label for="titre">TAG</label>
                  <input type="text" class="form-control" id="tag" name="tag" placeholder="XXX">
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
              $_POST["name1"] = htmlentities($_POST["name"], ENT_QUOTES);
              $_POST["tag1"] = htmlentities($_POST["tag"], ENT_QUOTES);
              $_POST["img1"] = htmlentities($_POST["img"], ENT_QUOTES);
              $pdo1->exec("INSERT INTO image (name, tag, link) VALUES ('$_POST[name]', '$_POST[tag]', 'Img/$_POST[img]');");

              echo "Donnée(s) Enregister";
              header('Refresh: 0');
              //*********************************************** */
          }


          ?>
    </body>
</html>
