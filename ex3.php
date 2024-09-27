<?php


function creatableau() {
$tab = array('','','','','');
$tab[0]=rand(0,99);
$tab[1]=rand(0,99);
$tab[2]=rand(0,99);
$tab[3]=rand(0,99);
$tab[4]=rand(0,99);
return $tab;
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
$tab = creaTableau();
echo "Tableau 3 : ";
print_r("[$tab[0]],[$tab[1]],[$tab[2]],[$tab[3]],[$tab[4]]");
echo "<br>";
echo "Le plus petit est : " . plusPetit($tab) . "\n";
echo "<br>";
echo "Le plus grand est : " . plusGrand($tab). "\n";
echo "<br>";

?>
