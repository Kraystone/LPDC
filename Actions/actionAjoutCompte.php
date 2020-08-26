<?php

$nom=filter_input(INPUT_POST, "nom");
$prenom=filter_input(INPUT_POST, "prenom");
$mdp=filter_input(INPUT_POST, "mdp");
$email=filter_input(INPUT_POST, "email");
$mdpHash= hash('adler32', $mdp);

require "../Actions/config.php";

try {
    $db = new PDO("mysql:host=".Config::SERVEUR.";dbname=".Config::BASE, Config::UTILISATEUR, Config::MOTDEPASSE);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$requete=$db->prepare("INSERT INTO client (id, nom, prenom, mdp, email)"."VALUES (NULL, :nom, :prenom, :mdpHash, :email)");
$requete->bindParam(":nom", $nom);
$requete->bindParam(":prenom", $prenom);
$requete->bindParam(":mdpHash", $mdpHash);
$requete->bindParam(":email", $email);

echo "$nom\n";
echo "$prenom\n";
echo "$mdpHash\n";
echo "$email\n";

$requete->execute();

header('Location: ../Vues/connectionClient.php');
?>


