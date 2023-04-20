<?php
echo "Entrez le premier nombre : ";
$nombre1 = readline();

echo "Entrez le deuxième nombre : ";
$nombre2 = readline();

if (($nombre1 > 0 && $nombre2 > 0) || ($nombre1 < 0 && $nombre2 < 0)) {
    echo "Le produit est positif\n";

} elseif (($nombre1 < 0 && $nombre2 > 0) || ($nombre1 > 0 && $nombre2 < 0)) {
    echo "Le produit est négatif\n";
    
} else {
    echo "Le produit est nul\n";
}
?>
