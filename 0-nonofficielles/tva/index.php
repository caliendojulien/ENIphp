<!doctype html>
<html lang="fr">
<head>
    <title>Formulaire</title>
</head>
<body>
<form action="traitement.php" method="post">
    <label for="tva">TVA</label><input
            type="number"
            step="0.1"
            name="tva"
            id="tva"
            value="<?= $_POST["tva"] ?? "" ?>"
    >
    <label for="ht">HT</label><input
            type="number"
            step="0.01"
            name="ht"
            id="ht"
            value="<?= $_POST["ht"] ?? "" ?>"
    >
    <input type="submit" value="Calculer" name="calcul">
</form>
</body>
</html>
