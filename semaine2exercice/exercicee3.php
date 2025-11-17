<?php

function doubleBoucle($n) {
    $result = "";
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            $result .= $i;
        }
        $result .= "<br>"; 
    }
    return $result;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = intval($_POST["nombre"]);
    $sequence = doubleBoucle($nombre);
} else {
    $sequence = "";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat Double boucle</title>
</head>
<body>
    <h1>Résultat</h1>
    <?php if ($sequence !== ""): ?>
        <p><?= $sequence ?></p>
    <?php else: ?>
        <p>Aucun nombre soumis.</p>
    <?php endif; ?>
    <a href="exercicee3.html">Retour au formulaire</a>
</body>
</html>
