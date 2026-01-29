<?php
echo '<link rel="stylesheet" href="../../style.css">';

$tableau = [15, 3, 9, 42, 1, 8, 20];

echo "<p>Tableau : [" . implode(", ", $tableau) . "]</p>";

if (empty($tableau)) {
    echo "<p>Le tableau est vide.</p>";
} else {
    $min = $tableau[0];
    $max = $tableau[0];
    $taille = count($tableau);

    for ($i = 1; $i < $taille; $i++) {
        if ($tableau[$i] < $min) {
            $min = $tableau[$i];
        }
        if ($tableau[$i] > $max) {
            $max = $tableau[$i];
        }
    }

    echo "<p>Minimum : <strong>$min</strong></p>";
    echo "<p>Maximum : <strong>$max</strong></p>";
}

echo "<br>";
echo "  <a href='/' style='padding: 10px; background-color: black; color: white; border-radius: 10px; text-decoration: none'>Retour au menu</a>";
echo "<br><br>";
highlight_file(__FILE__);
?>