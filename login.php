<?php session_start();?>
<DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8"/>
        ><TItle>login</TItle>
</head>
<body>
    <?php
    if(isset($_SESSION['nombre'])){
        echo "<p>bienvenido:" . $_SESSION['nombre'] . "!";
        echo "<p><a href: ´logout.php´>cerrar sesion</a></p>"; 
        echo "<br><p><a href: ´dashboard.php´>ir al panel de control</a>"; 
    }
    ?>
    <h2>acceder</h2>
    <form action= "dashboard.php" method="POST"
    <p><input type="text" placeholder= "usuario:" name="nombre" required autofocus/></p>
    <p><input type="submit" value="acceder" /></p>
</form>