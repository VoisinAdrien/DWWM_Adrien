<?php

$tableau1 = array(4,8,7,9,1,5,4,6);
$tableau2 = array(7,6,5,2,1,3,7,4);


$resultat = array();


for ($i = 0; $i < count($tableau1); $i++) {
    $somme = $tableau1[$i] + $tableau2[$i];

    $resultat[] = $somme;
}

// print_r affiche le résultat du tableau
print_r($resultat);
