<?php
echo '<link rel="stylesheet" href="../../style.css">';
$minutes = 120;

echo "<p>Input: minutes = <strong>$minutes</strong></p>";

$prix1 = 10 + (0.50 * $minutes);
$prix2 = 15 + (0.42 * $minutes);

echo "<p>Telecom1 : $prix1 €</p>";
echo "<p>Telecom2 : $prix2 €</p>";

if ($prix1 < $prix2) {
	echo "<p>Resultat : Telecom1 est moins cher.</p>";
} elseif ($prix2 < $prix1) {
	echo "<p>Resultat : Telecom2 est moins cher.</p>";
} else {
	echo "<p>Resultat : Les prix sont identiques.</p>";
}

echo "<br>";
echo "  <a href='/' style='padding: 10px; background-color: black; color: white; border-radius: 10px; text-decoration: none'>Retour au menu</a>";
highlight_file(__FILE__);