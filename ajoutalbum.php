<?php require './bdd.php';?>
<form action="ajoutalbum.php" method="POST" enctype="multipart/form-data">

<div id="senku">
    <label for="titre"> titre </label>
    <input type="text" name="titre" id="titre" required>
</div>

<div id="senku">
    <label for="datealb">datel </label>
    <input type="text" name="datealb" id="datealb" required>
</div>



<div id="senku">
<label for="album_pic"> Photo de profil </label>
<input type="file" name="album_pic" id="album_pic">
</div>

<div id="senku">
<label for="musique"> musiques </label>
<input type="text" name="musique" id="musique">
</div>


<div id="senku">
<button <?=isset($_SESSION["titre"])?"":"disabled"?> class="button_form" type="submit"> Envoyer </button>
</div>

<?php echo "bonjour"?>
<section>
            <?php
            
            $req = $pdo->query('SELECT * FROM album WHERE album_pic = "ffff"');
            return $req;
            foreach ($req as $resultat) {
               echo $resultat;
                }
                ?>

            </section>

</div>
</div>



</form>