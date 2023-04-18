<?php
$nombre = readline ("Choisi un un nombre entre 10 et 20");

while ($nombre < 10 || $nombre > 20) {
    echo "Entrez un nombre entre 10 et 20 : ";
    $nombre = readline();

    if ($nombre < 10) {
        echo "Plus grand !\n";
    } elseif ($nombre > 20) {
        echo "Plus petit !\n";
    }
}

echo "Nombre correct\n";
?>