<?php
function niveauScolaire($age) {
    if ($age < 3) {
        return "creche";
    } elseif ($age < 6) {
        return "maternelle";
    } elseif ($age < 11) {
        return "primaire";
    } elseif ($age < 16) {
        return "college";
    } elseif ($age < 18) {
        return "lycee";
    } else {
        return "aucun niveau";
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $age = intval($_POST["age"]);
    $niveau = niveauScolaire($age);
} else {
    $niveau = "";
    $age = "";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat Niveau Scolaire</title>
</head>
<body>
    <h1>Résultat</h1>
    <?php if ($niveau !== ""): ?>
        <p>L'enfant de <?= $age ?> ans va à : <strong><?= $niveau ?></strong></p>
    <?php else: ?>
        <p>Aucun âge soumis.</p>
    <?php endif; ?>
    <a href="exercicee1.html">Retour au formulaire</a>
</body>
</html>
