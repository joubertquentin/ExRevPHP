<?php

$tab = array('','','','','');
$tab[0]=rand(0,99);
$tab[1]=rand(0,99);
$tab[2]=rand(0,99);
$tab[3]=rand(0,99);
$tab[4]=rand(0,99);
   
function doublonTab($tab){
    $arun = array_unique($tab);
    if ($tab != $arun){
        echo "True";
    }
    else {
        echo "False";
    }

}
print_r("[$tab[0]],[$tab[1]],[$tab[2]],[$tab[3]],[$tab[4]]");
echo "<br>";
echo doublonTab($tab);

?>