<?php
echo '<link rel="stylesheet" href="../../style.css">';

$tableau = [2.5, 3.1, 2.5, 4.0, 2.5, 1.2];
$valeurCherchee = 2.5;

echo "<p>Tableau : [" . implode(", ", $tableau) . "]</p>";
echo "<p>Valeur cherchee : $valeurCherchee</p>";

$occurrences = 0;
foreach ($tableau as $valeur) {
    if ($valeur == $valeurCherchee) {
        $occurrences++;
    }
}

echo "<p>Nombre d'occurrences : <strong>$occurrences</strong></p>";

echo "<br>";
echo "  <a href='/' style='padding: 10px; background-color: black; color: white; border-radius: 10px; text-decoration: none'>Retour au menu</a>";
echo "<br><br>";
highlight_file(__FILE__);
?>