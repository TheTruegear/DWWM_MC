<?php
require "Employe.class.php";
require "Cadre.classe.php";

$employe1 = new Employe("Neymar","Jean","1850389546548",1500.56,"soudeur");
$employe2 = new Employe("Simon","Jeremy","179028955812",1700.47,"assistant mécanicien");
$employe3 = new Employe("Deray","Odile","285097154678",1900.14,"magasinière");
$employe4 = new Cadre("Deloin","Alain","1840259453666",2100.23,"chef maintenance",[$employe1,$employe3]);
$employes =[$employe1,$employe2,$employe3];
// foreach($employes as $value){
    // echo $value. "\n";
// }
echo $employe1;
?>