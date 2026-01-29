<?php
echo '<link rel="stylesheet" href="../../style.css">';
$valeur = 100;
$type = 'E'; // E ou F

echo "<p>Input: valeur = <strong>$valeur</strong>, type = <strong>$type</strong></p>";

$taux = 6.55957;

if ($type == 'E') {
	$res = $valeur * $taux;
	echo "<p>Resultat: $valeur Euros = <strong>" . number_format($res, 2) . " Francs</strong></p>";
} elseif ($type == 'F') {
	$res = $valeur / $taux;
	echo "<p>Resultat: $valeur Francs = <strong>" . number_format($res, 2) . " Euros</strong></p>";
} else {
	echo "<p>Erreur: Type incorrect.</p>";
}

echo "<br>";
echo "  <a href='/' style='padding: 10px; background-color: black; color: white; border-radius: 10px; text-decoration: none'>Retour au menu</a>";
highlight_file(__FILE__);