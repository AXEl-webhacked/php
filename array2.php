<DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8"/>
        ><TItle>Array 2</TItle>
</head>
<body>
<?php
$edades = array("alejandro"=>"21" , "alex"=>"17", "joaquin"=>"16");
echo "alex tiene" . $edades["alex"]. "años.";
 
foreach($edades as $x => $valor){
    echo "clave=" . $x . ", valor=". $valor;
    echo "<br>";
}
?>
</body>
</html>