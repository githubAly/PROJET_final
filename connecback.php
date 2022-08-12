<?php

session_start();
require "bdd.php";

if(isset($_POST["submit"]))

{
    if(empty($_POST["username"]) || empty($_POST["userpass"]))
    {
        echo "remplissage absent";
    }
    
    else{
        $query = "SELECT * FROM inscription WHERE username = :username LIMIT 1";
        $statement= $pdo->prepare($query);
        $statement-> execute(
            array(
                "username" => $_POST["username"]
            )
            );
            $count = $statement->rowCount();
            if($count > 0)
            {
            $result = $statement->fetch(PDO::FETCH_ASSOC);

            if(password_verify($_POST["userpass"], $result["userpass"])) {

                session_start();
                $_SESSION["username"] = $_POST["username"];
                $_SESSION["photo"] = $result["photo"];
                exit(header ("location: espacemembre.php"));
            } else {
                echo 'arf';
                header ('location: indexconnec.php');
            }
    }
else {
    echo 'erf';
}
}
}
?>