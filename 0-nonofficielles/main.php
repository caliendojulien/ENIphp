<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dépot d'un cookie</title>
    <link href="../style/style.css" rel="stylesheet">
</head>
<body>
<h1>Non officielles</h1>
<h2>TP sur les voitures</h2>
<?php
require_once '../afficheCode.php';
afficheCode(['voitures/index.php'], false, '');
echo '<br />';
afficheCode(['voitures/Cnx.php'], false, '');
echo '<br />';
afficheCode(['Voitures/traitement_form.php'], false, '');
?>
<h2>TP sur la TVA</h2>
<?php
require_once '../afficheCode.php';
afficheCode(['tva/index.php'], false, '');
echo '<br />';
afficheCode(['tva/traitement.php'], false, '');
?>
<h2>TP final</h2>
<?php
require_once '../afficheCode.php';
afficheCode(['tpfinal/bo/Restaurant.php'], false, '');
echo '<br />';
afficheCode(['tpfinal/dal/ConnexionSQL.php'], false, '');
echo '<br />';
afficheCode(['tpfinal/dal/Requete.php'], false, '');
echo '<br />';
afficheCode(['tpfinal/vue/vueDetails.php'], false, '');
echo '<br />';
afficheCode(['tpfinal/vue/vueRestaurants.php'], false, '');
echo '<br />';
afficheCode(['tpfinal/css/styles.css'], false, '');
echo '<br />';
afficheCode(['tpfinal/indeX.php'], false, '');
?>
</body>
</html>
