<?php
$tab = [];

for ($i=1;$i<=5;$i++){
    $tab[] = rand(0,99);
}
var_dump($tab);
$max=-1;
$min=100;
for ($i=0; $i<5; $i++)
{
	if ($tab[$i] > $max)
	{
		$max = $tab[$i];
	}
	if ($tab[$i] < $min)
	{
		$min = $tab[$i];
	}
}
echo "<br>";
echo "Le plus grand nombre est : ".$max;
echo "<br>";
echo "Le plus petit est : ".$min;

?>