<?php

// Chemin du fichier de compteur
$counter_file = 'index.txt';

// Lire le compteur actuel
if (file_exists($counter_file)) {
    $counter = file_get_contents($counter_file);
    $counter = intval($counter);
} else {
    $counter = 0;
}

// Afficher le compteur
echo "Nombre de vues de la page index.php : " . $counter;

?>