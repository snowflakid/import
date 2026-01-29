<?php
echo '<link rel="stylesheet" href="../../style.css">';
$entier1 = 5;
$entier2 = 3;

echo "<p>Input: Nombre = <strong>$entier1</strong>, Exposant = <strong>$entier2</strong></p>";

$resultat = $entier1 ** $entier2;

echo "<p>Resultat: <strong>$resultat</strong></p>";

echo "<br>";
echo "  <a href='/' style='padding: 10px; background-color: black; color: white; border-radius: 10px; text-decoration: none'>Retour au menu</a>";
highlight_file(__FILE__);