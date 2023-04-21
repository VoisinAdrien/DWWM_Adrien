<?php
echo "Combien de valeurs voulez-vous saisir ? ";
$n = readline();

$tableau = array();

for ($i = 0; $i < $n; $i++) {
    echo "Entrez la valeur n°" . ($i + 1) . " : ";
    $valeur = readline();
    $tableau[] = $valeur;
}

$plus_grande_valeur = $tableau[0];
$position_plus_grande_valeur = 0;
for ($i = 1; $i < $n; $i++) {
    if ($tableau[$i] > $plus_grande_valeur) {
        $plus_grande_valeur = $tableau[$i];
        $position_plus_grande_valeur = $i;
    }
}

echo "La plus grande valeur est : " . $plus_grande_valeur . "\n";
echo "Elle se trouve à la position n°" . ($position_plus_grande_valeur + 1) . " dans le tableau.\n";
