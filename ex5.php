<?php

$tab = [];

for ($i=1;$i<=5;$i++){
    $tab[] = rand(0,99);
}
function croissantTab($tab){
    $tabcroissant = sort($tab);
    if ($tab != $tabcroissant){
        echo "True";
    }
    else {
        echo "False";
    }
}
var_dump($tab);
echo "<br>";
echo croissantTab($tab);

?>