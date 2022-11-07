<?php
$nb = readline("Entrez un nombre : ");
for($nb=1;$nb<=5;$nb++) {
    echo "Les 5 nombres précedents sont : " . $nb - 1 . $nb - 2 . $nb - 3 . $nb - 4 . $nb -5 ."\n";
    echo "****************" ."\n";
    echo "Les 5 nombres suivants sont : " . $nb + 1 . $nb +2 . $nb + 3 . $nb +4 . $nb +5;
}
?>