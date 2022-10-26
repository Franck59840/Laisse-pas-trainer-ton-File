<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"/>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title> Idendity cards Simpson </title>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
</head>
<body>
<h1 class="text-center"> Idendity cards Simpson </h1>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend> Ajoutez vos fichiers </legend>
                <div class="form-group">
                    <label for="file" class="maximal" >Taille maximale du fichier 1Mo:</label>
                    <input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
                    <input type="file" class="file" name="files[]" id="file" multiple/>
                </div>
                <input type="submit" value="Envoyer" class="btn btn-primary"/>
            </fieldset>
        </form>
    </div>
</div>
<?php

$dir ="uploads";
$scan = array_diff(scandir($dir), array('..','.'));


if(is_array($scan)){
    echo "<div class='container'>";
    foreach($scan as $image){
        echo
            "<div class='col-md-3'>".
            "<div class='panel panel-default'>".

            "<img src='uploads/$image' style='width: 25%'>".
            "</div>".
            "<div class='panel-body'>".
            "<p>Nom : $image</p>".
            "<a href='delete.php?file=$image' class='btn btn-danger'>Supprimer</a>".
            "</div>".
            "</div>";

    }
    echo "</div> ";
}
?>
</body>
</html>
<?php

