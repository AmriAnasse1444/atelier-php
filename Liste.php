<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste d'Éléments</title>
</head>
<body>
    <h1>Ma Liste d'Éléments</h1>

    <?php
    $elements = array("Pomme", "Banane", "Cerise", "Datte");
    $elements = array("PC", "Clavier", "Souris", "Écran");
    echo "<ul>";
    foreach ($elements as $element) {
        echo "<li>$element</li>";
    }
    echo "</ul>";
    ?>

</body>
</html>
