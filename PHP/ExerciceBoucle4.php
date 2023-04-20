<?php
echo "********************************************\n";
echo "              Calculateur PGCD              \n";
echo "********************************************\n";
echo "\n";

$nb1 = readline("Entrez le premier nombre : ");
$nb2 = readline("Entrez le deuxième nombre : ");

while($nb2 >0){
    $reste = $nb1 % $nb2;
    $nb1 = $nb2;
    $nb2 = $reste;
}

echo "Le PGCD est égal à " . $nb1;
