<?php
// exo 1
$mois = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre"];

// exo 2
echo $mois[2];

// exo 3
echo $mois[5];

// exo 4
$mois[7] = "août";

// exo 5
$departement = [59 => "Nord", 62 => "Pas de calais", 02 => "Aisne", 60 => "Oise", 80 => "Somme"];

// exo 6
echo $departement[59];

// exo 7
$departement[51] = "Marne";

// exo 8
foreach($mois as $value) {
    echo $value . "<br>";
}

// exo 9
foreach($departement as $key => $value) {
    echo "$value <br>";
}

// exo 10
foreach($departement as $key => $value) {
    echo "le département $value a le numéro $key <br>";
}
