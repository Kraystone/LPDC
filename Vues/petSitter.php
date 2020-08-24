<?php
include "../Vues/header.php";
mon_header("Garde Chien");
session_start();
//Génération d'un token de sécurité
$token=rand(0,2000000000);
//je stocke la valeur en session, côté serveur
$_SESSION["token"]=$token;

?>
<div class="w3-content">
    <div class="w3-display-container mySlides">
        <img src="../Images/diapo03.jpg" style="width:100%">
        <div class="w3-display-middle w3-large w3-container w3-padding-16">
            <h1><b>Promenade de chien</b></h1>
        </div>
    </div>
    <div class="w3-display-container mySlides">
        <img src="../Images/diapo02.jpg" style="width:100%">
        <div class="w3-display-middle w3-large w3-container w3-padding-16">
            <h1><b>Promenade de chien</b></h1>

        </div>
    </div>
    <div class="w3-display-container mySlides">
        <img src="../Images/diapo01.jpg" style="width:100%">
        <div class="w3-display-middle w3-large w3-container w3-padding-16">
            <h1><b>Promenade de chien</b></h1>
        </div>
    </div>
</div>
<br>
<h1>Comment ça marche ?</h1>
<br>
<div class="containerFonctionnement">
    <div class="containerIcon">
        <a href="connectionClient.php"><i class="fas fa-calendar-plus icon"></i></a>
        <i class="far fa-handshake icon"></i>
        <i class="fas fa-paw icon"></i>
    </div>
    <div class="containerText">
        <div class="box">
            <p>Pour commencer notre processus d'admission, veuillez remplir le nouveau formulaire client ici. Une fois que nous aurons reçu votre candidature, nous commencerons immédiatement à examiner nos disponibilités et vous enverrons un e-mail dans les 24 heures.</p>
        </div>
        <div class="box">
            <p>Une fois votre espace client créer, vous pourrez prendre un rendez-vous pour que nous puissions communiquer de vive voix sur les besoins de votre chien. Ce rendez vous peut etre faire a distance pour respecter les distanciations sociales.</p>
        </div>
        <div class="box">
            <p>Une fois connecté a votre espace client vous avez accès a notre portail de planification. Vous avez aussi accès a des rapports journaliers de vote promeneur.</p>
        </div>
    </div>
</div>
<br>

<div class="container_petSitting">
    <h2>Création de votre compte</h2>
    <br><br>
    <form method="post" action="../Actions/actionAjoutCompte.php">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="prenom">Votre prénom</label>
                <input type="text" class="form-control" placeholder="Prénom" name="prenom" id="prenom">
            </div>
            <div class="form-group col-md-6">
                <label for="Nom">Votre nom</label>
                <input type="text" class="form-control" placeholder="Nom" name="nom" id="nom">
            </div>
            <div class="form-group col-md-6">
                <label for="MDP">Votre mot de passe</label>
                <input type="password" class="form-control" placeholder="Mot de passe" name="mdp" id="mdp">
            </div>
            <div class="form-group col-md-6">
                <label for="email">Votre Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email" id="email">
            </div>
        </div>
        <hr>
        <br>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Accepter</button>
    </form>
</div>
<br>
<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 5000); // Change image every 5 seconds
    }
</script>