<!DOCTYPE html>
<html lang="fr">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree&display=swap" rel="stylesheet">
</head>




<?php
require './bdd.php';

?>

<?php


    
    if (!empty($_POST)){
        $errors = array();
        if (!isset($_SESSION)){
            $errors['session'] = "Vous n'êtes pas connecté";
        }
        if(empty($_SESSION["username"])){
            $errors['title'] = "Vous n'avez pas renseigné de titre";
        }
        if(empty($_POST['content'])){
            $errors['content'] = "Vous n'avez pas écrit";
        }
        if(empty($errors)){
            require 'bdd.php';

            $req = $pdo->prepare('INSERT INTO commentairehistoire SET title=?, content=?, creadate = NOW()');
            $req ->execute([$_SESSION["username"],$_POST['content']]);
            $errors['message'] = 'message enregistré';
        }
    }
    
    else {
        $errors['formulaire'] = 'Veuillez renseigner les champs';
    }
    ?>
    <div style="display:flex; flex-direction:column; width:100% ">
            <fieldset>
        

                <form action='#' method="POST">
            <?php if(isset($errors)){
                foreach ($errors as $message){
                    echo "<p class='errortest'>$message</p>";
                }
            }
            ?>

                <div>
                    <label  for="title">Pseudo</label><br>
                    <p><?=  $_SESSION["username"] ??  ""?></p>
                </div>

                <div>
                    <label for="content">Contenu</label><br>
                    <textarea id="zonecommentaire"<?=isset($_SESSION["username"])?"":"disabled"?> name="content" id="content" wrap="off" cols="100" row="10"></textarea>
                </div>

                <div class="subbutton">
                    <button <?=isset($_SESSION["username"])?"":"disabled"?> type="submit">Poster</button>
                </div>
            </form>
        </fieldset>

        <section>
            <?php
            require './bdd.php';
            $req = $pdo->query('SELECT title AS t, content AS c FROM commentairehistoire');
            while ($data = $req->fetch()):
                ?>

            <div>
                <div style="border:solid; border-width:1px; display: flex;">
                    <div  id="photo_membre" style="100px">
                        <img style="width:120px" src="copyimage/<?=$_SESSION["photo"]?>">
                    </div>
                    <div style="display:flex; flex-direction:column">
                        <h2><?= ($data->t)?></h2>
                        <p><?= ($data->c)?></p>
                    </div>
            
            <?php endwhile ?>
        </div>
        </section>