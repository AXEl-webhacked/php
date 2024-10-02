<DOCTYPE html>
    <html>
    <head>
    <TItle>edad</TItle>
        <meta charset="UTF-8"/>
        <style>
            .estilo_par{
                color:red;
            }
        </style>
</head>
<body>
<?php

for ($x=0; $x<=100 ; $x++){
    if ($x % 2 == 0){
        echo "<p class = estilo_par> x $x= </p>";
    }else{
        echo "<p class = estilo_impar> x $x= </p>";
    } 
}
?>
</body>
</html>