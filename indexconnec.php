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
<body id="bodyconnexion">
    <div id="blocprincip">
        <div class="bloc">
            <h1 id="titreinscrip"> Connexion </h1>
            <div id="fieldset">
                

            <form action="./connecback.php" method="POST"> 
                    <div id="senku">
                        <label for="username"> Nom d'Utilisateur </label>
                        <input type="text" name="username">
                    </div>
                    <div id="senku">
                        <label for="userpass"> Mot de Passe </label>
                        <input type="password" name="userpass">
                    </div>
                    <div id="senku">
                    <button class="button_form" type="submit" name="submit"> Connexion </button>
                    </div>
                    </form>   
            </div>
        </div>

        <div class="bloc">
            <h1 id="titreinscrip" class="ou"> ou</h1>
        </div>
        
        <div class="bloc">
            <h1 id="titreinscrip"> Inscris-toi </h1>
            <div id="fieldset">
            

                <form action="./formuback.php" method="POST" enctype="multipart/form-data">

                    <div id="senku">
                        <label for="username"> Nom d'Utilisateur </label>
                        <input type="text" name="username" id="username" required>
                    </div>

                    <div id="senku">
                        <label for="mail"> Adresse e-mail </label>
                        <input type="text" name="mail" id="mail" required>
                    </div>


                    <div id="senku">
                        <label for="descrip"> Description </label>
                        <input type="textarea" name="descrip" id="descrip">
                    </div>

                    <div id="senku">
                        <label for="userpass"> Mot de Passe </label>
                        <input type="password" name="userpass" id="uspass" required>
                    </div>
                
                    <div id="senku">
                        <label for="confirm_pass "> Confirmez le Mot de Passe </label>
                        <input type="password" name="confirm_pass" id="confpass" required>
                        </div>

                    <div id="senku">
                    <label for="photo"> Photo de profil </label>
                    <input type="file" name="photo" id="photo">
            </div>

            <div id="senku">
                <button class="button_form" type="submit"> Envoyer </button>
            </div>

        </div>
    </div>

    

        </form>
    </div>

</body>
