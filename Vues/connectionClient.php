<?php
include "../Vues/header.php";
mon_header("Connection");
session_start();
$tokenEnvoye=filter_input(INPUT_POST, "token");
if ($tokenEnvoye!=$_SESSION["token"]){
    echo "Vilain pirate";
    die();
}

?>

<div class="containerConnection">
    <form method="post" action="../Actions/actionConnection.php">
    <h2>Connection</h2>
    <div class="form-group col">
        <label for="email">Votre Email</label>
        <input type="email" class="form-control" placeholder="Email" name="email" id="email">
    </div>
    <div class="form-group col">
        <label for="mdp">Votre mot de passe</label>
        <input type="password" class="form-control" placeholder="Mot de passe" name="mdp" id="mdp">
    </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Connexion</button>
    </form>
</div>
