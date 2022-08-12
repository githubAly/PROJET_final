
<?php 
require 'bdd.php';
if(!empty($_POST)){
    $titre=$_POST['titre'];
    $datealb=$_POST['datealb'];
    $uploadurl = './album_p/';
    $uploadname = basename($_FILES['album_pic']['name']);
    $uploadfile = $uploadurl . $uploadname;
    move_uploaded_file($_FILES['album_pic']['tmp_name'], $uploadfile);
    $musique=$_POST['musique'];

    $req = "INSERT INTO album (titre, datealb, album_pic, musique)
            VALUES ('$titre', '$datealb', '$uploadname', '$musique')";
    $stmt = $pdo->prepare($req);
    $stmt->execute();
}

$stmt = $pdo->prepare("SELECT * FROM album");
$stmt->execute();
$albums = $stmt->fetchAll();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div id="display">
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <fieldset id="fieldset">
            <div id="senku">
                
                <label for="titre"> Titre </label>
                <input type="text" name="titre" id="titre" required>
            </div>
            <div id="senku">
                <label for="datealb"> Année </label>
                <input type="text" name="datealb" id="datealb">
            </div>
            <div id="senku">
                <label for="album_pic"> Image d'album </label>
                <input type="file" name="album_pic" id="album_pic">
            </div>
            <div id="senku">
                <label for="musique"> Avis </label>
                <input type="text" name="musique" id="musique">
            </div>
            <div id="senku">
                <button name="submit" type="submit">Envoyer</button>
            </div>
        </fieldset>
    </form>


    <table>
        <?php foreach($albums as $album) : ?>
            <tr>
                <td><img src="album_p/<?= $album->album_pic ?>" alt="<?= $album->album_pic ?>"></td>
                <td><strong><?= $album->titre ?></strong></td>
                <td><?= $album->datealb ?></td>
                <td><a href="delete.php?idalb=<?= $album->idalb ?>"> X </a></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>