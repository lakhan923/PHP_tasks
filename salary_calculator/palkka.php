<?php
$nimi = $_POST["nimi"];
$veroprosentti = $_POST["vero"];
$bruttopalkka = $_POST["palkka"];

$veroprosentti = $veroprosentti / 100;
$veroa = $bruttopalkka * $veroprosentti;
$nettopalkka = $bruttopalkka - $veroa;

echo "<p>Työntekijän nimi: $nimi</p>";
echo "<p>Bruttopalkkka: $bruttopalkka$</p>";
echo "<p>Veroprosentti: $veroprosentti%</p>";
echo "<p>Nettopalkka: $nettopalkka €</p>"
?>