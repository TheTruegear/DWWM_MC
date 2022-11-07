<?php
$nb = readline("Entrez un nombre : ");
$f = 1;
for ($i=$nb; $i>=1;$i--){
    $f = $f * $i;
}
echo "$nb! = $f";
?>