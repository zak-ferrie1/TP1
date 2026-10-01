<?php
$nombreServeurs = 6;
$coutMensuelUnitaire = 24.90;
$nombreMois = 12;

$coutmensuel = $coutMensuelUnitaire * $nombreServeurs;
$coutannuel = $coutmensuel * 12;

echo "cout mensuel est : " . $coutmensuel . "<br>";
echo "cout annuel est : " . $coutannuel . "<br>";
echo "cout moyen par serveur est : " . $coutMensuelUnitaire . "<br>";