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
session_start();
if(empty($_SESSION['username'])){
    header('location: ./indexconnec.php');
}

?>


<div id="display">
    
<div id="blocdisco">
<div id="deconnexion">
<a href="./deconnexionback.php">Déconnexion</a>
</div>

dd
    <div style="display:flex; flex-direction: column; align-items:center; margin-top: 150px">
<h1 style="text-decoration: underline;">Bonjour <?=$_SESSION['username']?>, tu peux donner ton avis sur ton artiste favori</h1>



            <h2 class="titredisco"> Album</h2>
            <div id="alignement">
                <div class="spoiler" onclick="openclosespoil(this);">
                    <h2 id="titrealbum"> Agartha <br><span class="annee">2017 </span>
                        </span>
                    </h2>
                    <img class="album_disco" src="./img/agartha.jpg">
                    <div class="contenuSpoiler">
                        <ol start="1">
                            <li> Acacia </li>
                            <li> Megadose </li>
                            <li> Si j'arrêtais </li>
                            <li> Je t'aime </li>
                            <li> Totem </li>
                            <li> LSD </li>
                            <li> Ma meilleure <br> amie </li>
                            <li> Neo </li>
                            <li> Lezarman </li>
                            <li> Blanc </li>
                            <li> Eurotrap </li>
                            <li> Petite chatte </li>
                            <li> Vitrine </li>
                            <li> Strip </li>
                            <li> Kid Cudi </li>
                            <li> Libellule </li>
                            <li> Dernier verre </li>
                        </ol>

                    </div>

                </div>
                <div class="spoiler" onclick="openclosespoil(this);">
                    <h2 id="titrealbum"> XEU <br> <span class="annee">2018</span>
                        </span>
                    </h2>
                    <img class="album_disco" src="./img/vald_xeu.jpg">
                    <div class="contenuSpoiler">
                        <ol start="1">
                            <li> Primitif </li>
                            <li> Seum </li>
                            <li> DQTP </li>
                            <li> Possédé </li>
                            <li> Chepakichui </li>
                            <li> Résidus </li>
                            <li> J'entertain </li>
                            <li> Rituel </li>
                            <li> Désaccordé </li>
                            <li> Gris </li>
                            <li> Réflexions <br>basses </li>
                            <li> Offshore </li>
                            <li> Ne me déteste <br> pas </li>
                            <li> Rocking chair </li>
                            <li> Dragon </li>
                            <li> Deviens génial </li>
                            <li> Trophée </li>
                        </ol>

                    </div>

                </div>


                <div class="spoiler" onclick="openclosespoil(this);">
                    <h2 id="titrealbum"> Ce monde est Cruel <br> <span class="annee">2019 </span>
                        </span>
                    </h2>
                    <img class="album_disco" src="./img/ce monde est cruel.jpg">
                    <div class="contenuSpoiler">
                        <ol start="1">
                            <li> Poches pleines </li>
                            <li> NQNTMQMQMB </li>
                            <li> Journal perso II </li>
                            <li> Ce monde est <br> cruel </li>
                            <li> PensionMan </li>
                            <li> Ma star </li>
                            <li> Ignorant </li>
                            <li> Halloween </li>
                            <li> Dernier Retrait </li>
                            <li> Keskivonfer </li>
                            <li> Pourquoi </li>
                            <li> J'pourrai </li>
                            <li> No Friends </li>
                            <li> ASB </li>
                            <li> Royal Bacon </li>
                            <li> Rappel </li>
                        </ol>

                    </div>
                </div>
                <div class="spoiler" onclick="openclosespoil(this);">
                    <h2 id="titrealbum"> Horizon Vertical <br> <span class="annee">2020 </span>
                        </span>
                    </h2>
                    <img class="album_disco" src="./img/horizonverti.jpg">
                    <div class="contenuSpoiler">
                        <ol start="1">
                            <li> Mélange </li>
                            <li> Matrixé </li>
                            <li> Mauvais </li>
                            <li> Diviser pour <br> mieux régner </li>
                            <li> Guccissima </li>
                            <li> 2014 </li>
                            <li> Horizon Vertical </li>
                            <li> Canada </li>
                            <li> 1992 </li>
                            <li> Royal cheese </li>
                            <li> VHR </li>
                            <li> Adios </li>
                        </ol>

                    </div>
                </div>


                <div class="spoiler" onclick="openclosespoil(this);">
                    <h2 id="titrealbum"> V <br> <span class="annee">2022 </span>
                        </span>
                    </h2>
                    <img class="album_disco" src="./img/vald_v.jpg">
                    <div class="contenuSpoiler">
                        <ol start="1">
                            <li> Pandémie </li>
                            <li> La faux le fer </li>
                            <li> Sur un nouvel <br>album </li>
                            <li> Un mot </li>
                            <li> Peon </li>
                            <li> Papoose</li>
                            <li> Je ressens rien </li>
                            <li> Rappeur <br> conscient </li>
                            <li> Maudit </li>
                            <li> Regarde-toi </li>
                            <li> Qui écoute ? </li>
                            <li> Pas deux fois </li>
                            <li> Anunnaki </li>
                            <li> Laisse tomber </li>
                            <li> Happy end </li>
                            <li> Bien sûr </li>
                        </ol>

                    </div>
                </div>

            </div>
            <h2 class="titrediscoEP titredisco"> EP's</h2>
            <div id="alignement">
                <div class="spoiler" onclick="openclosespoil(this);">
                    <h2 id="titrealbum"> NQNT <br><span class="annee">2014 </span>
                        </span>
                    </h2>
                    <img class="album_disco" src="./img/nqnt.jpg">
                    <div class="contenuSpoiler">
                        <ol start="1">
                            <li> C'est pour </li>
                            <li> Par Toutatis </li>
                            <li> Shoote un <br>ministre </li>
                            <li> Autiste </li>
                            <li> Sullyvan </li>
                            <li> Flowjob </li>
                            <li> Vie de cochon </li>
                            <li> Horrible </li>
                            <li> Aulnay-sous-Bois </li>
                            <li> Elle me regarde </li>
                            <li> Smiley </li>
                            <li> PF </li>
                            <li> CQFD </li>
                        </ol>

                    </div>

                </div>
                <div class="spoiler" onclick="openclosespoil(this);">
                    <h2 id="titrealbum"> NQNT 2 <br> <span class="annee">2015</span>
                        </span>
                    </h2>
                    <img class="album_disco" src="./img/nqnt 2.jpg">
                    <div class="contenuSpoiler">
                        <ol start="1">
                            <li> Retour </li>
                            <li> Bonjour </li>
                            <li> Infanticide </li>
                            <li> Quidam </li>
                            <li> Cartes sous <br> l'coude </li>
                            <li> Urbanisme </li>
                            <li> Selfie </li>
                            <li> Barème </li>
                            <li> Taga </li>
                            <li> Promesse </li>
                            <li> Joffrey </li>
                            <li> Ogre </li>

                        </ol>

                    </div>

                </div>
            </div>


            <h2 class="titredisco"> MIXTAPES </h2>
            <div id="alignement">
                <div class="spoiler" onclick="openclosespoil(this);">
                    <h2 id="titrealbum"> NQNTMQMQMB <br><span class="annee">2011 </span>
                        </span>
                    </h2>
                    <img class="album_disco" src="./img/nqntmqmqmb.jpg">
                    <div class="contenuSpoiler">
                        <ol start="1">
                            <li> Surprise </li>
                            <li> Smiley </li>
                            <li> Gouaould </li>
                            <li> Verre de sang </li>
                            <li> Winston </li>
                            <li> Evoluchienne </li>
                            <li> Pas grave </li>
                            <li> Fado </li>
                            <li> Lalala </li>
                            <li> Teh stylé </li>
                            <li> Metafion </li>
                            <li> Donkey Punch </li>
                            <li> Cylindrinque </li>
                            <li> J'ai vu </li>
                            <li> Encore </li>
                            <li> Pour si peu </li>
                            <li> Adulez-moi </li>
                            <li> Bad Trip </li>
                            <li> Epices Loufoques </li>
                            <li> La comptine <br> de Sullyvan </li>
                            <li> Nique le bordel </li>
                            <li> Cylindrinque </li>
                            <li> J'ai vu </li>
                            <li> Encore </li>
                            <li> Pour si peu </li>
                            <li> Adulez-moi </li>
                        </ol>

                    </div>

                </div>
                <div class="spoiler" onclick="openclosespoil(this);">
                    <h2 id="titrealbum"> Cours de rattrapage <br> <span class="annee">2012</span>
                        </span>
                    </h2>
                    <img id="album_disco_cours" class="album_disco" src="./img/cours.jpg">
                    <div class="contenuSpoiler">
                        <ol start="1">
                            <li> Primitif </li>
                            <li> Seum </li>
                            <li> DQTP </li>
                            <li> Possédé </li>
                            <li> Chepakichui </li>
                            <li> Résidus </li>
                            <li> J'entertain </li>
                            <li> Rituel </li>
                            <li> Désaccordé </li>
                            <li> Gris </li>
                            <li> Réflexions <br>basses </li>
                            <li> Offshore </li>
                            <li> Ne me déteste <br> pas </li>
                            <li> Rocking chair </li>
                            <li> Dragon </li>
                            <li> Deviens génial </li>
                            <li> Trophée </li>
                        </ol>

                    </div>

                </div>


                <div class="spoiler" onclick="openclosespoil(this);">
                    <h2 id="titrealbum"> NQNT33 <br> <span class="annee">2018 </span>
                        </span>
                    </h2>
                    <img class="album_disco" src="./img/ab67616d0000b2732a1ad811f192d80b7f5da477.jpg">
                    <div class="contenuSpoiler">
                        <ol start="1">
                            <li> Poches pleines </li>
                            <li> NQNTMQMQMB </li>
                            <li> Journal perso II </li>
                            <li> Ce monde est <br> cruel </li>
                            <li> PensionMan </li>
                            <li> Ma star </li>
                            <li> Ignorant </li>
                            <li> Halloween </li>
                            <li> Dernier Retrait </li>
                            <li> Keskivonfer </li>
                            <li> Pourquoi </li>
                            <li> J'pourrai </li>
                            <li> No Friends </li>
                            <li> ASB </li>
                            <li> Royal Bacon </li>
                            <li> Rappel </li>
                        </ol>

                    </div>
                </div>
                <?php include ("avis.php")?>
                <?php include("commentaire.php")?>
            </div>

</div>
</div>
            <?php include("footer.php"); ?>

            <script src="https://unpkg.com/scrollreveal"></script>
            <script async defer src="http://platform.instagram.com/en_US/embeds.js"></script>
            <script src="./index.js"></script>