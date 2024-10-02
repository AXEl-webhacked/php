<?php
if(isset($_POST)){

    $autor= $_POST['autor'];
    $titulo= $_POST['titulo'];
$nick='alejandro';
}
?>
<?php
include "conexion.php";

$sql_insertar = "insertar into cancion values(default,'$autor','$titulo','$nick')";

$conexion->query($sql_insertar);

header("location: //dashboard.php");
exit;

?>