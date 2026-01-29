<?php
echo '<link rel="stylesheet" href="../../style.css">';
$x = 15.5;
$y = 4.2;
$z = 20.1;

echo "<p>Input: x = <strong>$x</strong>, y = <strong>$y</strong>, z = <strong>$z</strong></p>";

$values = [$x, $y, $z];
sort($values);

$sortedX = $values[0];
$sortedY = $values[1];
$sortedZ = $values[2];

echo "<p>Resultat: <strong>$sortedX</strong> ≤ <strong>$sortedY</strong> ≤ <strong>$sortedZ</strong></p>";
echo "<br>";
echo "  <a href='/' style='padding: 10px; background-color: black; color: white; border-radius: 10px; text-decoration: none'>Retour au menu</a>";
highlight_file(__FILE__);