<?php

$title =[
    "La Flèche noire" => "1888",
    "Le Club du suicide" => "1878",
    "Le Voleur de cadavres" => "1884"
];

asort($title);

foreach($title as $key => $value){
    echo "$value " . "- $key" . "<br>";
}

?>