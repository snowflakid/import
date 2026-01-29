<?php
echo '<link rel="stylesheet" href="../../style.css">';
$nbJours = 31;

echo "<p>Input: Nombre de jours = <strong>$nbJours</strong></p>";

echo "<p>Mois correspondants : ";
switch ($nbJours) {
    case 28:
    case 29:
        echo "<strong>Février</strong>";
        break;
    case 30:
        echo "<strong>Avril, Juin, Septembre, Novembre</strong>";
        break;
    case 31:
        echo "<strong>Janvier, Mars, Mai, Juillet, Août, Octobre, Décembre</strong>";
        break;
    default:
        echo "<strong>Aucun</strong>";
}
echo "</p>";

echo "<br>";
echo "  <a href='/' style='padding: 10px; background-color: black; color: white; border-radius: 10px; text-decoration: none'>Retour au menu</a>";
highlight_file(__FILE__);