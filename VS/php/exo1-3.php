<?php
$A = 3;
$B = 10;
$C = $A + $B;
$B = $A + $B;
$A = $C;

echo "La variable A = " . $A . "\n"; 
echo "La variable B = " . $B . "\n"; 
echo "La variable C = " . $C;

?>