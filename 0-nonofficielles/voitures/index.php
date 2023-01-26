<!doctype html>
<!-- index.php -->
<html lang="fr">
<head>
    <title>Voitures</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<?php require_once 'Cnx.php' ?>
<?php
$pdo = new Cnx();
?>
<br><br>
<div class="container text-center">
    <div class="row">
        <div class="col-4 offset-4">
            <table class="table table-bordered align-content-center">
                <?php
                foreach ($pdo->getModeles() as $modele) {
                    echo '<tr><td>' . $modele['marque'] . '</td></tr>';
                }
                unset($pdo);
                ?>
            </table>
        </div>
    </div>
    <div class="row">
        <form action="traitement_form.php" method="post">
            <label for="id_modele">id_modele</label>
            <input type="text" name="id_modele" id="id_modele">
            <label for="marque">Marque</label>
            <input type="text" name="marque" id="marque">
            <label for="modele">Modele</label>
            <input type="text" name="modele" id="modele">
            <label for="carburant">Carburant</label>
            <input type="text" name="carburant" id="carburant">
            <input type="submit" value="Ajouter" name="ajouter">
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>
