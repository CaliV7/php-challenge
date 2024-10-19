<?php

$weapons = ['fists','whip','gun'];

// Règle du jeu :
// Le gun bat le fists mais se fait battre par le whip
//Le fists bat le whip mais se fait battre par le gun
// Le whip bat le gun mais se fait battre par le fists

$opponantWeapon = $weapons[rand(0,2)]; // Permet de chosir une arme de manière aléatoire

if($opponantWeapon == $weapons[0]){
    $stevensonWeapon = $weapons[2];
}

elseif($opponantWeapon == $weapons[1]){
    $stevensonWeapon = $weapons[0];
}

elseif($opponantWeapon == $weapons[2]){
    $stevensonWeapon = $weapons[1];
}

echo $stevensonWeapon; // On affiche donc l'arme censée être plus forte que  celle de l'adversaire

