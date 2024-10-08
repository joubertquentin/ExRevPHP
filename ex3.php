<?php
$tab = [];

for ($i=1; $i<=5; $i++)
{
	$tab[] = rand(0,99);
}



function plusPetit($tab) {
    $min = $tab[0];
    for ($indice = 1; $indice < count($tab); $indice++) {
        if ($tab[$indice] < $min) {
            $min = $tab[$indice];
        }
    }
    return $min;
}


function plusGrand($tab) {
    $max = $tab[0];
    for ($indice = 1; $indice < count($tab); $indice++) {
        if ($tab[$indice] > $max) {
            $max = $tab[$indice];
        }
    }
    return $max;
}

var_dump($tab);
echo "<br>";
echo "Le plus petit est : " . plusPetit($tab) . "\n";
echo "<br>";
echo "Le plus grand est : " . plusGrand($tab). "\n";
echo "<br>";

?>
