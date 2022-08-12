<?php
/*
include './fonctions.php';
session_start();

if(isset($_POST['titre'])){
    $photoalb = $_FILES['album_pic']['name'];
    $titre = $_POST['titre'];
    if(!empty($_POST['titre'])) {
        $errors=array();
    

        if(empty($_POST['titre'])){
            echo "faux1";
        }

        elseif(empty($_POST['datealb'])){
            echo 'faux2';
        }


        elseif(empty($_POST['musique'])){
            echo 'faux4';
        }




        else {
            $titre = valid_donnees($_POST['titre']);


            require "./bdd.php";

            if (copy($_FILES['album_pic']['tmp_name'], __DIR__. './album_p/'. $photoalb )){
            $req = $pdo->prepare("INSERT INTO album SET titre = ?, datealb = ?, album_pic = ?, musique = ?");
            $req->execute([$_POST['titre'], $_POST['datealb'],$_FILES['album_pic'] = $photoalb, $_POST['musique']]);
            $_SESSION["titre"] = $titre;
            $_SESSION['album_pic'] = $photoalb;
            header('location: espacemembre.php');

            exit();
            }
            else {
            echo'echec envoi photo';
            }
        }
    }
}else {
    header('location: disco.php');
}
*/
?>

