<?php
function exo2($nb1, $nb2){
    if (($nb1 <= 0) || ($nb2 <= 0));
    return ("Erreur");
    while ($nb2 > 0){
        $r = $nb1 % $nb2;
        $nb1 = $nb2;
        $nb2 = $r;
    }
    return $nb1;
}

function exo3($nb1, $nb2){
    $res = $nb1 * $nb2;
    while($nb1 > 1){
        $r = $nb1 % $nb2;
        if($r == 0){
            $result = $res / $nb2;
        }
        $nb1 = $nb2;
        $nb1 = $r;
        return $result;
    }
}

function exo4($nb){
    echo " X 2 = " . $nb * 2 . "\n";
    echo " X 3 = " . $nb * 3 . "\n";
    echo " X 4 = " . $nb * 4 . "\n";
    echo " X 5 = " . $nb * 5 . "\n";
    echo " X 6 = " . $nb * 6 . "\n";
    echo " X 7 = " . $nb * 7 . "\n";
    echo " X 8 = " . $nb * 8 . "\n";
    echo " X 9 = " . $nb * 9 . "\n";
    echo " X 10 = " . $nb * 10 . "\n";
}

function exo5($nb){
    $nb = 1;
    for ($i = 1; $i <= $nb; $i++){
        $nb = $nb * $i;
    }
    return $nb;
}

function exo6($array){
    $array=array(5,10,15);
    $sumarray = array_sum($array);
    return $sumarray;
}

function exo7(){
    readline("Nombre de lignes ? ");
    echo "*" . "\n";
    echo "**" . "\n";
    echo "***" . "\n";
    echo "****" . "\n";
    echo "*****" . "\n";
    echo "******" . "\n";
    echo "*******" . "\n";
    echo "******" . "\n";
    echo "*****" . "\n";
    echo "****" . "\n";
    echo "***" . "\n";
    echo "**" . "\n";
    echo "*" . "\n";
}
?>