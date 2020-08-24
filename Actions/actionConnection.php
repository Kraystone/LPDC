<?php

session_start(); // On démarre une session

require_once '../actions/config.php';

// Reccup des données entrées dans le formulaire
$email = $_POST['email'];
$motDePasse = $_POST['mdp'];
$motDePasseHash = hash('adler32', $motDePasse);

//Requete permettant de vérifier si l'ID et le mdp rentrés sont bons
$db = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BASE, Config::UTILISATEUR, Config::MOTDEPASSE);
$r = $db->prepare("select email, motDePasse from comptes where login=:login and motDePasse=:motDePasse");
$r->bindParam(":login", $login);
$r->bindParam(":motDePasse", $motDePasseHash);
$r->execute();
$lignes = $r->fetchAll();

if ($r->rowCount() == 0) {
    header('Location: index.php?erreur_de_connexion');
} else {
    header('Location: ../Vues/espaceClient.php');
}
?>