<?php

$tabetudiants = array(
    "Dupont" => array("anglais" => 12, "français" => 9, "math" => 8),
    "Franck" => array("anglais" => 2, "français" => 19, "math" => 12),
    "Alice" => array("anglais" => 10, "français" => 11, "math" => 10),
    "Stephane" => array("anglais" => 14, "français" => 15, "math" => 18),
    "Coralie" => array("anglais" => 12, "français" => 19, "math" => 5)
);


foreach ($tabetudiants as $nommat => $notes) {
    $totalnotes = 0;
    $nbmat = count($notes);
    
    foreach ($notes as $matiere => $note) {
        $totalnotes += $note;
    }
    
    $moyenne = $totalnotes / $nbmat;
    
   
    if ($moyenne >= 10) {

        echo "{$nommat} a obtenu l'examen avec une moyenne de " . number_format($moyenne, 2) . "\n";
        echo "<br>";
    }
}

?>
