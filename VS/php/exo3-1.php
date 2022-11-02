<?php
$nombre = readline("Entrez un nombre :");
if ($nombre > 0) {
    echo "Votre nombre est positif.";
} elseif ($nombre < 0) {;
    echo "Votre nombre est négatif.";
} else {
    echo "Tu te crois drôle c'est ça";
}
?>