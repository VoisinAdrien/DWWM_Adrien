<?php
$nombre = readline("Ecris un nombre de départ : ");

for ($i = 1; $i <= 10; $i++) {
    $suivant = $nombre + $i;
    echo $suivant . "\n";
}
?>