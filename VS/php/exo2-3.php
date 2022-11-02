<?php
$prix = readline("Donnez un nombre: ");
$TVA = 20 / 100;
$prixf = $prix + $TVA;

echo "Le prix final est: " . $prixf;
?>