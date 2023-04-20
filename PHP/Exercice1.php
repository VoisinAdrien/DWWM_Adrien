<?php
echo "Entrez un nombre : ";
$nombre = readline();

if ($nombre > 0) {
    echo "$nombre est positif\n";
} else {
    echo "$nombre est négatif\n";
}
?>