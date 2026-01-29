<?php
echo '<link rel="stylesheet" href="../../style.css">';

$tableau = [12, 5, 89, 4, 25, 7, 10];
$valeurCherchee = 25;

echo "<p>Tableau : [" . implode(", ", $tableau) . "]</p>";
echo "<p>Valeur cherchee : $valeurCherchee</p>";

$indice = -1;
$taille = count($tableau);
for ($i = 0; $i < $taille; $i++) {
    if ($tableau[$i] == $valeurCherchee) {
        $indice = $i;
        break;
    }
}

if ($indice != -1) {
    echo "<p>Resultat : La valeur est presente a l'indice <strong>$indice</strong>.</p>";
} else {
    echo "<p>Resultat : La valeur n'est pas presente dans le tableau (-1).</p>";
}

echo "<br>";
echo "  <a href='/' style='padding: 10px; background-color: black; color: white; border-radius: 10px; text-decoration: none'>Retour au menu</a>";
echo "<br><br>";
highlight_file(__FILE__);
?>