<?php
include "../Vues/header.php";
mon_header("Garde Chien");
session_start();
//Génération d'un token de sécurité
$token=rand(0,2000000000);
//je stocke la valeur en session, côté serveur
$_SESSION["token"]=$token;

?>
<fieldset class="slideshow">

    <!-- Slide 1 -->
    <input type="radio" id="slideCheckbox1" name="slide" checked autofocus>
    <div class="slide">
        <div class="slide__html">
            <!-- You can include HTML instead of a background image using .slide__image -->
        </div>
        <div class="slide__content">
            <h1>Slideshow Concept V2 (No JS)</h1>
            <p>A pure CSS and HTML slideshow concept.</p>
            <p>To add or remove slides:</p>
            <ul>
                <li>Add a new slide template and label in the HTML</li>
                <li>Update the <code>$slide-count</code> SCSS variable</li>
                <li>Tab colours: Update the <code>$c-slides</code> SCSS variable</li>
                <li>Slide popout images: Update the <code>$b-slides</code> SCSS variable</li>
            </ul>
            <p>Use the tabs below to change slide</p>
            <p><strong style="color: #0F0">NEW:</strong> Arrow keys work too after your first selection.</p>
            <p>Et voila.</p>
        </div>
    </div>

    <!-- Slide 2 -->
    <input type="radio" id="slideCheckbox2" name="slide">
    <div class="slide">
        <div class="slide__content">
            <h1>More</h1>
            <p>More here</p>
        </div>
    </div>

    <!-- Slide 3 -->
    <input type="radio" id="slideCheckbox3" name="slide">
    <div class="slide">
        <div class="slide__content">
            <h1>Yet More</h1>
            <p>Yet more here</p>
        </div>
    </div>

    <!-- Slide 4 -->
    <input type="radio" id="slideCheckbox4" name="slide">
    <div class="slide">
        <div class="slide__content">
            <h1>Zzz</h1>
            <p>Yada yada</p>
        </div>
    </div>

    <!-- Slide 5 -->
    <input type="radio" id="slideCheckbox5" name="slide">
    <div class="slide">
        <div class="slide__content">
            <h1>The end</h1>
            <p>It's over</p>
        </div>
    </div>

    <!-- Add more slides here! -->

    <nav>

        <!-- Add slide labels here! -->

        <label class="slide-button" for="slideCheckbox1">Intro</label>
        <label class="slide-button" for="slideCheckbox2">More</label>
        <label class="slide-button" for="slideCheckbox3">Yet More</label>
        <label class="slide-button" for="slideCheckbox4">Zzz</label>
        <label class="slide-button" for="slideCheckbox5">The End</label>
    </nav>

</fieldset>

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