<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    </head>
    <body>
<?php
        $pdo5 = new PDO("mysql:host=localhost;dbname=data_image", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $result = $pdo5->query("SELECT * FROM image WHERE id_image = '$_GET[id]';");
        $info = $result->fetch(PDO::FETCH_OBJ);

        if (!empty($_POST)) {
            //*********************************************** */
            // Insetion

            $_POST["name1"] = htmlentities($_POST["name"], ENT_QUOTES);
            $_POST["tag1"] = htmlentities($_POST["tag"], ENT_QUOTES);
            $result = $pdo5->exec("UPDATE `name` SET `name` = '$_POST[name]', `tag` = '$_POST[tag]', WHERE id_img = '$_GET[id_image]';");

            echo "Donnée(s) Enregister";
            header('Refresh: 0');
            //*********************************************** */
        }


        ?>

        <div class="starter-template">
            <form method="POST" action="" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="titre">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $info->name;?>">
                    <label for="titre">Tag</label>
                    <input type="text" class="form-control" id="tag" name="tag" value = "<?php echo $info->tag;?>">


                </div>

                <button type="submit" class="btn btn-primary">Enregister</button>

            </form>
            </body>
</html>
