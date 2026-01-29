<?php
echo '<link rel="stylesheet" href="../../style.css">';
$x = -5;
$y = 12;

echo "<p>Input: x = <strong>$x</strong>, y = <strong>$y</strong></p>";

$signe = "";
if ($x == 0 || $y == 0) {
	$signe = "Nul (0)";
} elseif (($x > 0 && $y > 0) || ($x < 0 && $y < 0)) {
	$signe = "Positif (+)";
} else {
	$signe = "Négatif (-)";
}

echo "<p>Le signe du produit est : $signe</p>";
echo "<br>";
echo "  <a href='/' style='padding: 10px; background-color: black; color: white; border-radius: 10px; text-decoration: none'>Retour au menu</a>";
highlight_file(__FILE__);