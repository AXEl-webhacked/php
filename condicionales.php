<DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8"/>
        ><TItle>edad</TItle>
</head>
<body>
<?php
$edad=17;

if ($edad >= 18 && $edad <60){
echo "eres mayor de edad";
}elseif($edad<=17 && $edad>11){
    echo "eres menor de edad";
}else{
    echo "algo anda mal";
}
?>
</body>
</html>
