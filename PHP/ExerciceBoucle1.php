<?php
$nombre = Readline("Entrez un nombre :");

while ($nombre < 1 || $nombre > 3) {
    echo "Choisi un nombre compris entre 1 et 3 :\n";
    $nombre = readline("Entrez un nombre :");
}

echo "Le nombre saisi est correct: ";
?>