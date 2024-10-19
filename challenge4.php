<?php

$films = [
    'Dr Jekyll et M. Hyde' => ['Michael Caine','Cheryl Ladd','Joss Ackland'],
    'Le Club du suicide' => ['Oleg Dahl','Donatas Banionis','Igor Dmitriev'],
    'Treasure Island' => ['Bobby Driscoll','Basil Sydney','Robert Newton'],
]; // On a créé un tableau associatif ayant pour clé le titre d'un film et regroupant les 3 acteurs principaux de ces films

foreach($films as $key => $film){
    echo ("Dans le film " . "$key, " . "les principaux acteurs sont : " . $films[$key][0] . ", " . $films[$key][1] . " et " . $films[$key][2] . "." . "<br>");
} // On cherchait à faire afficher les titres des films et leurs acteurs principaux à l'aide d'une boucle