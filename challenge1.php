<?php
$nameBook = "Voyage avec un âne dans les Cévennes";
echo $nameBook. "<br>"; // On souhaite connaître le titre du livre

$read = false; // On essaie de savoir si le livre a été lu 

if ($read == false) {
    echo "Je n'ai pas lu ce livre". "<br>";
} 
else {
    echo "J'ai lu ce livre". "<br>";
}

$publicationDate = 2017; // On souhaite connaître la date de publication du livre 
echo $publicationDate. "<br>";

$price = 6.20; // On souhaite connaître le prix 
echo $price. "<br>";
?>
