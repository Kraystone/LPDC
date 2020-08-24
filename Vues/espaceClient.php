<?php
include "../Vues/header.php";
mon_header("Garde Chien");
session_start();
$tokenEnvoye=filter_input(INPUT_POST, "token");
if ($tokenEnvoye!=$_SESSION["token"]){
    echo "Vilain pirate";
    die();
}


require_once '../Actions/config.php';
$db = new PDO("mysql:host=".Config::SERVEUR.";dbname=".Config::BASE, Config::UTILISATEUR, Config::MOTDEPASSE);



?>

<div class="containerResa">
    <h1>Mes réservations</h1>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Jour/Heure de la réservation</th>
            <th scope="col">Modification de la réservation</th>
            <th scope="col">Supprimer la réservation</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>.</td>
            <td>.</td>
            <td>.</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>.</td>
            <td>.</td>
            <td>.</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>.</td>
            <td>.</td>
            <td>.</td>
        </tr>
        </tbody>
    </table>
</div>

<?php
include "../Vues/footer.php";
mon_footer();
?>
