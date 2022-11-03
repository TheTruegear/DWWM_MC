<?php
$age = readline("Entrez votre age: ");
$sexe = readline("Entrez 1 si homme, 2 si femme: ");
if ($age >= 20 && $sexe = 1) {
    echo "Vous payez l'impôt.";
} elseif ($age >= 18 && $age <= 35 && $sexe = 2) {
    echo "Vous payez l'impôt.";
} else echo "Vous ne payez pas l'impôt.";
?>