<?php

// Chemin du fichier de compteur
$counter_file = 'tuto.txt';

// Lire le compteur actuel
if (file_exists($counter_file)) {
    $counter = file_get_contents($counter_file);
    $counter = intval($counter);
} else {
    $counter = 0;
}

// Incrémenter le compteur
$counter++;

// Enregistrer le nouveau compteur dans le fichier
file_put_contents($counter_file, $counter);


?>