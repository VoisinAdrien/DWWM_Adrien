<?php
echo "Entrez l'âge : ";
$age = readline();

if ($age >= 6 && $age <= 7) {
    echo "Catégorie : Poussin\n";

} elseif ($age >= 8 && $age <= 9) {
    echo "Catégorie : Pupille\n";

} elseif ($age >= 10 && $age <= 11) {
    echo "Catégorie : Minime\n";

} elseif ($age >= 12) {
    echo "Catégorie : Cadet\n";
}
?>
