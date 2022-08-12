<?php 
session_start();

$id =$_GET['idalb'];

require "bdd.php";
$req = $pdo->prepare('SELECT album_pic FROM album WHERE idalb = :id');
$req->execute([
    'id' => $id
]);    
$res = $req->fetch();
unlink('album_p/' . $res->album_pic);

$req = $pdo->prepare("DELETE FROM album WHERE idalb = ?");
$req->execute(array($id));

exit(header('location:index.php'));


?>