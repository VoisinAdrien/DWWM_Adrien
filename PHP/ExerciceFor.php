<?php

$nombre = rand(1, 9);

echo "Table de multiplication de " . $nombre . " :\n";
for ($i = 1; $i <= 10; $i++) {
    echo $i . "x" . $nombre . "= " . ($i * $nombre) . "\n";
}
?>
