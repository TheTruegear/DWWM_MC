<?php
$nb = readline("Donnez un nombre : ");
if ($nb >> 0) {
    echo "Nombre positif";
} elseif ($nb == 0) {
    echo "Ni négatif, ni positif";
} else echo "Nombre négatif";
?>