<DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8"/>
        ><TItle>Array</TItle>
</head>
<body>
    <?php
    $dia[0] = "domingo";
    $dia[1] = "lunes";
    $dia[2] = "martes";
    $dia[3] = "miercoles";
    $dia[4] = "jueves";
    $dia[5] = "viernes";
    $dia[6] = "sabado";

    $mes = array("enero","febrero","marzo");
    echo "dia: ";
    echo "mes> ";
?>
<?php
$autos = array("volvo","BMW","toyota");
$arraylongitud = count($autos);
for($x = 0; $x < $arraylongitud; $x++){
    echo $autos[$x];
    echo  "<br>";
}
?>
</body>
</html>
