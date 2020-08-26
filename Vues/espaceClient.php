<?php
include "../Vues/header.php";
mon_header("Espace client");
require_once '../Actions/config.php';
$ID_Client=filter_input(INPUT_GET, "id");
echo $ID_Client;
$db = new PDO("mysql:host=".Config::SERVEUR.";dbname=".Config::BASE, Config::UTILISATEUR, Config::MOTDEPASSE);
$r = $db->prepare("select id, idClient, actif, dateHeure from reservation where idClient = $ID_Client");
$r->execute();
$lignes = $r->fetchAll();
?>
<div class="containerResa">
    <h1>Mes réservations</h1>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Active</th>
            <th scope="col">Jour/Heure de la réservation</th>
            <th scope="col">Modification de la réservation</th>
            <th scope="col">Supprimer la réservation</th>
        </tr>
        </thead>
        <tbody>
        <?php
            foreach ($lignes as $ligne) {
        ?>
        <tr>
            <th scope="row"><?php
                if ($ligne["actif"] == 0){
                    echo "<div style='color:Red'>" . $ligne['dateHeure'] . "</div>";
                } else
                    echo "<div style='color:Black'>" . $ligne['dateHeure'] . "</div>";
                ?></th>
            <td>
                <div><?php echo $ligne['dateHeure'] ?></div>
            </td>
            <td><button type="button" class="btn btn-warning">Modifier</button></td>
            <td><button type="button" class="btn btn-danger">Supprimer</button></td>
        </tr>
        <tr>
            <th scope="row"><?php
                if ($ligne["actif"] == 0){
                    echo "<div style='color:Red'>" . $ligne['dateHeure'] . "</div>";
                } else
                    echo "<div style='color:Black'>" . $ligne['dateHeure'] . "</div>";
                ?></th>
            <td><?php echo "<div>" . $ligne['dateHeure'] . "</div>"; ?></td>
            <td><button type="button" class="btn btn-warning">Modifier</button></td>
            <td><button type="button" class="btn btn-danger">Supprimer</button></td>
        </tr>
        <tr>
            <th scope="row"><?php
                if ($ligne["actif"] == 0){
                    echo "<div style='color:Red'>" . $ligne['dateHeure'] . "</div>";
                } else
                    echo "<div style='color:Black'>" . $ligne['dateHeure'] . "</div>";
                ?></th>
            <td><?php echo "<div>" . $ligne['dateHeure'] . "</div>"; ?></td>
            <td><button type="button" class="btn btn-warning">Modifier</button></td>
            <td><button type="button" class="btn btn-danger">Supprimer</button></td>
        </tr>
            <?php
            }
    	?>
        </tbody>
    </table>
</div>
<?php
include "../Vues/footer.php";
mon_footer();
?>
