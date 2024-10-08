<?php

$tab = [];

for ($i=1;$i<=5;$i++){
    $tab[] = rand(0,99);
}

function doublonTab($tab){
    $arun = array_unique($tab);
    if ($tab != $arun){
        echo "True";
    }
    else {
        echo "False";
    }

}
var_dump($tab);
echo "<br>";
echo doublonTab($tab);

?>