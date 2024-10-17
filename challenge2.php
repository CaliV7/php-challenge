<?php

$secretmsg1 = "0@sn9sirppa@#?ia'jgtvryko1";

$keyword = strlen($secretmsg1) /2; // On cherche à déterminer le mot-clé grâce au calcul de la taille du msg, divisé par 2

$secretmsg1 = substr($secretmsg1, 5, $keyword); // On extrait une sous-chaîne du msg

$message1 = str_replace('@#?',' ',$secretmsg1); // On remplace certains caractères par des espaces

echo strrev($message1)." "; // On inverse et affiche le msg puis on saute une ligne

// On va répéter ce process pour 2 autres msgs

$secretmsg2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";

$keyword = strlen($secretmsg2) /2; // On cherche à déterminer le mot-clé grâce au calcul de la taille du msg, divisé par 2

$secretmsg2 = substr($secretmsg2, 5, $keyword); // On extrait une sous-chaîne du msg

$message2 = str_replace('@#?',' ',$secretmsg2); // On remplace certains caractères par des espaces

echo strrev($message2)." "; // On inverse et affiche le msg puis on saute une ligne


$secretmsg3 = "aopi?sgnirts@#?sedhtg+p9l!";

$keyword = strlen($secretmsg3) /2; // On cherche à déterminer le mot-clé grâce au calcul de la taille du msg, divisé par 2

$secretmsg3 = substr($secretmsg3, 5, $keyword); // On extrait une sous-chaîne du msg

$message3 = str_replace('@#?',' ',$secretmsg3); // On remplace certains caractères par des espaces

echo strrev($message3); // On inverse et affiche le msg puis on saute une ligne
?>