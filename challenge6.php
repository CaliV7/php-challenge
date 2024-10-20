<?php

function writeSecretSentence(string $param1, string $param2):string{
    return "$param1 s'incline face à $param2";
}

echo writeSecretSentence('le feu','la lune');

?>

// On a créé une fonction ayant deux paramètres typés et un retour typés.
// On renvoit le résutat avec 'return' puis on l'affiche en dehors de la fonction. J'ai pris le feu et la lune comme exemple.