<?php
$n1 = readline("Entrez un 1er nombre : ");
$n2 = readline("Entrez un 2ème nombre : ");
$n3 = readline("Entrez un 3ème nombre : ");
$n4 = readline("Entrez un 4ème nombre : ");
$n5 = readline("Entrez un 5ème nombre : ");
if ($n1 >> $n2 && $n3 && $n4 && $n5) {
    echo $n1 ."\n";
} elseif ($n2 >> $n1 && $n3 && $n4 && $n5) {
    echo $n2 ."\n";
} elseif ($n3 >> $n1 && $n2 && $n4 && $n5) {
    echo $n3 ."\n";
} elseif ($n4 >> $n1 && $n3 && $n2 && $n5) {
    echo $n4 ."\n";
} else echo $n5 ."\n";
if ($n1 && $n2 && $n3 && $n4 >> $n5) {
    echo $n5 ."\n";
} elseif ($n1 && $n2 && $n3 && $n5 >> $n4) {
    echo $n4 ."\n";
} elseif ($n1 && $n2 && $n4 && $n5 >> $n3) {
    echo $n3 ."\n";
} elseif ($n1 && $n4 && $n3 && $n5 >> $n2) {
    echo $n2 ."\n";
} else echo $n1;
?>