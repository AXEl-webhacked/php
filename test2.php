<?php
$meses = array("enero" ,"febrero" ,"marzo" ,"abril" ,"mayo", "junio", "julio" ,"agosto" ,"septiembre", "octubre", "noviembre", "diciembre");

$fecha= date("Y-m-d");
$dia= date("d");
$mes= date("m") -1;
$ann= date("Y");

print(" Hoy es: " .$dia. " de " .$meses[$mes]. " de " .$ann);
?>