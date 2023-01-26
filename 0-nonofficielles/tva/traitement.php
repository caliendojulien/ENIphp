<?php
require_once 'index.php';

$ht = filter_input(INPUT_POST, 'ht', FILTER_SANITIZE_NUMBER_FLOAT);
$tva = filter_input(INPUT_POST, 'tva', FILTER_SANITIZE_NUMBER_FLOAT);
?>
<?php
$message = '';
if (empty($_POST['ht'])) {
    $message .= 'Le HT ne peut être vide. ';
}
if (empty($_POST['tva'])) {
    $message .= 'La TVA ne peut être vide. ';
}
if (isset($_POST["calcul"]) && !empty($_POST['tva']) && !empty($_POST['ht'])) {
    $mtva = $tva / 100 * $ht;
    echo "<p>Montant de la TVA : $mtva euros</p>";
    $ttc = $ht * (1 + $tva / 100);
    echo "<p>Montant TTC : $ttc euros</p>";
}
?>
<p><?= !empty($message) ?? $message ?></p>
