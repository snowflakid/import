<?php
echo '<link rel="stylesheet" href="../../style.css">';
$montant = 650;
echo "<p>Montant d'achat : $montant €</p>";

$remise = 0;
$taux = 0;

if ($montant < 100) {
	$taux = 0;
} elseif ($montant <= 500) {
	$taux = 5;
} else {
	$taux = 8;
}

$montantRemise = $montant * ($taux / 100);
$netAPayer = $montant - $montantRemise;

echo "<p>Taux de remise : $taux %</p>";
echo "<p>Montant remise : $montantRemise €</p>";
echo "<p>Net à payer : $netAPayer €</p>";
echo "</div>";
echo "<br>";
echo "  <a href='/' style='padding: 10px; background-color: black; color: white; border-radius: 10px; text-decoration: none'>Retour au menu</a>";
highlight_file(__FILE__);