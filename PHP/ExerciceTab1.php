<?php
$notes = [];

for ($i = 0; $i < 9; $i++) {
    $saisie = readline("Saisir la note : ");
    $notes[] = $saisie;
}

$somme = array_sum($notes);
$moyenne = $somme / count($notes);

foreach ($notes as $value) {
    echo $value."\n";
}

echo 'La moyenne vaut : ' . $moyenne . "\n";
