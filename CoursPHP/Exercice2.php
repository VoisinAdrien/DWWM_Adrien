<?php
echo "Entrez le premier nombre : ";
$nombre1 = readline();

echo "Entrez le deuxième nombre : ";
$nombre2 = readline();

if (($nombre1 > 0) == ($nombre2 > 0)) {
    echo "Le résultat est positif\n";
} else {
    echo "Le résultat est négatif\n";
}
?>


