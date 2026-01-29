<?php
echo '<link rel="stylesheet" href="../../style.css">';

$tableau = [1, 2, 3, 4, 5];

echo "<p>Tableau initial : [" . implode(", ", $tableau) . "]</p>";

$tableauInverse = [];
$taille = count($tableau);

for ($i = $taille - 1; $i >= 0; $i--) {
    $tableauInverse[] = $tableau[$i];
}

echo "<p>Tableau inverse : [" . implode(", ", $tableauInverse) . "]</p>";

echo "<br>";
echo "  <a href='/' style='padding: 10px; background-color: black; color: white; border-radius: 10px; text-decoration: none'>Retour au menu</a>";
echo "<br><br>";
highlight_file(__FILE__);
?>