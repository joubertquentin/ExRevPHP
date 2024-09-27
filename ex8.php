<?php

$evenements = [
    "Formation PHP" => ["debut" => "2024-10-01", "fin" => "2024-10-15"],
    "Stage en entreprise" => ["debut" => "2024-11-01", "fin" => "2024-11-30"],
    "Examen final" => ["debut" => "2024-12-10", "fin" => "2024-12-12"],
];
$dateactuelle = date('Y-m-d');
foreach ($evenements as $nom => $dates) {
    $debuttemps = strtotime($dates['debut']);
    $fintemps = strtotime($dates['fin']);
    $dateactuelletemps = strtotime($dateactuelle);
    if ($dateactuelletemps < $debuttemps) {
        echo "{$nom} : À venir\n";
        echo "<br>";
    } elseif ($dateactuelletemps >= $debuttemps && $dateactuelletemps <= $fintemps) {
        echo "{$nom} : En cours\n";
        echo "<br>";
    } else {
        echo "{$nom} : Terminé\n";
        echo "<br>";
    }
}

?>
