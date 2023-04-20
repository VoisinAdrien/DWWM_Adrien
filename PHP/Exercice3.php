<?php
echo "Entrez un nombre : ";
$nombre = readline();

if ($nombre > 0) {
    echo "$nombre est positif\n";
} elseif ($nombre < 0) {

    echo "$nombre est négatif\n";
    
} else {
    echo "$nombre est nul\n";
}
?>
