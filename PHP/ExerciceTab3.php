<?php
$tableau = readline("Ecris nombre");

$somme = 0;

for ($i = 0; $i < count($tableau); $i++) {
  $somme += $tableau[$i];
}


echo "La somme des valeurs du tableau est : " . $somme;
?>
