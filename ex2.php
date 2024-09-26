<?php
$tab = array('','','','','');

$tab[0]=rand(0,99);
$tab[1]=rand(0,99);
$tab[2]=rand(0,99);
$tab[3]=rand(0,99);
$tab[4]=rand(0,99);

echo "Tableau 2 : ";
print_r("[$tab[0]],[$tab[1]],[$tab[2]],[$tab[3]],[$tab[4]]");
echo "<br>";
echo "Le plus grand nombre est : ";
echo max($tab);
echo "<br>";
echo "Le plus petit est : ";
echo min($tab);

?>