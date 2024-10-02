<?php
include 'conexion.php';

if ($conexion->connect_errno){
    echo "error de conexion ";
}else{

    $sql="select * from usuario";
    $resultado=$conexion->query($sql);
    if($resultado->num_rows > 0){
        while($r=$resultado->fetch_assoc()){
            echo $r['NICKNAME']."<br>";
            echo $r['EMAIL']."<br>";
        }
    }else{
        echo "nada que mostrar :(";
    }
}
?>




