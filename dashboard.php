<?php session_start();?>
<DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8"/>
     ><TItle>cerrar dashboard</TItle>
</head>
<body>
    <h2>sesion abierta</h2>
<p>
    <?php
    if (isset($_POST['nombre'])){
        $_SESSION['nombre']= $_POST['nombre'];
        echo "bienvenido,:<b>"== $_POST['nombre']. "</b>";
    } else {
        if(isset($_POST['nombre'])){
           echo "Has iniiado sesion como: ". $_SESSION['nombre'];
        }else{
            //si la sesion ya expiro
            echo "acceso restringido";
        }
    }
?></p>
<br>
<p><a href= "login.php">ir a la pagina inicial</a></p>  
<br>
<p><a href= "login.php">cerrar sesion</a></p>
</body>
</html>