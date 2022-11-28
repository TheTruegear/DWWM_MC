<?php
$tab=[1,2,3,4,5];
echo $tab[4];
for($i=0; $i < count($tab); $i++){
    echo $tab[$i];
}
// Haut: Tableau index, Bas: Tableau Associatif
$tabasso = array("Nom"=>"Maxence", "Age"=>22);
foreach($tabasso as $key => $value){
    echo $key . ":" . $value;
}
?>