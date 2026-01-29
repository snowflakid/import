<?php
echo '<link rel="stylesheet" href="../../style.css">';

$tableau = [45, 12, 8, 33, 8, 55];

echo "<p>Tableau : [" . implode(", ", $tableau) . "]</p>";

if (empty($tableau)) {
    echo "<p>Le tableau est vide.</p>";
} else {
    $indiceMin = 0;
    $min = $tableau[0];
    $taille = count($tableau);

    for ($i = 1; $i < $taille; $i++) {
        if ($tableau[$i] < $min) {
            $min = $tableau[$i];
            $indiceMin = $i;
        }
    }

    echo "<p>Minimum : $min</p>";
    echo "<p>Indice du minimum : <strong>$indiceMin</strong></p>";
}

echo "<br>";
echo "  <a href='/' style='padding: 10px; background-color: black; color: white; border-radius: 10px; text-decoration: none'>Retour au menu</a>";
echo "<br><br>";
highlight_file(__FILE__);
?>