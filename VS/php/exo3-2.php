<?php
$nombre1 = readline("Entrez un premier nombre : ") . $nombre2 = readline("Entrez un second nombre : ");
if ($nombre1 && $nombre2 > 0) {
    echo "Résultat positif.";
} elseif ($nombre1 && $nombre2 < 0) {
    echo "Résultat positif.";
} elseif ($nombre1 > 0 && $nombre2 < 0) {
    echo "Résultar négatif.";
} elseif ($nombre1 < 0 && $nombre2 > 0) {
    echo "Résultat négatif.";
}
// L'algorithme ne reconnait pas quels nombres sont positifs ou négatifs, et affiche à chaque fois un résultat positif
?>