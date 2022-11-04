<?php
$random = rand(1, 20);
if ($random <= 5) {
    echo "Résultat compris entre 1 et 5.";
} 
elseif ($random <= 10) {
    echo "Résultat compris entre 6 et 10.";
} 
elseif ($random <= 15) {
    echo "Résultat compris entre 11 et 15.";
} 
else echo "Résultat compris entre 16 et 20."
?>