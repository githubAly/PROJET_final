<?php

session_start();

if(isset($_POST['username'])){
    $photoname = $_FILES['photo']['name'];
    $username = $_POST['username'];
    if(!empty($_POST)) {
        $errors=array();
    

        include './fonctions.php';


        if(empty($_POST['username'])){
            echo "faux1";
        }

        elseif(empty($_POST['mail'])){
            echo 'faux2';
        }


        elseif(empty($_POST['userpass'])){
            echo 'faux6';
        }

        elseif(strlen($_POST['userpass']) < 6){
            echo 'faux4';
        }

        elseif(($_POST['userpass']) != ($_POST["confirm_pass"])){
            echo 'faux7';
        }



        else {
            $username = valid_donnees($_POST['username']);


            require "./bdd.php";

            if (copy($_FILES['photo']['tmp_name'], __DIR__. './copyimage/'. $photoname )){
            $req = $pdo->prepare("INSERT INTO inscription SET username = ?, mail = ?, descrip = ?, userpass = ?, photo = ? ");
            $password = password_hash($_POST['userpass'], PASSWORD_BCRYPT);
            $req->execute([$_POST['username'], $_POST['mail'], $_POST['descrip'], $password, $_FILES['photo'] = $photoname]);
            $_SESSION ["username"] = $username;
            $_SESSION ['photo'] = $photoname;
            header('location: indexconnec.php');

        exit();
            }else {
            echo'echec envoi photo';
            }
        }
    }
}else {
    header('location: disco.php');
}

?>