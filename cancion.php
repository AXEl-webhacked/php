<?php
include "conexion.php";

$sql = "select nombre, autor, genero_id from cancion where nickname like 'ale'";

$resultado=$conexion -> query($sql);
?>
<h3>lista de canciones</h3>
<table class="table table-striped">

<?php
if  ($resultado->num_rows>0){
    while($fila=$resultado -> fetch_assoc()){
        echo "<tr>";    
        echo "<td>". $fila["autor"]. "</td>";
        echo "<td>". $fila["nombre"]. "</td>";
        echo "<td>". $fila["genero_id"]. "</td>";
    }
}else {
    echo "no tiene canciones aun :(";
}
 ?>
</table>
<div class="colm-sm-4">
    <h4>agrege la cacnion</h4>
    <from method= "post" action="controladorcancion.php"
    <input type="text" name="autor" placeholder="autor" class="form-control">
    <input type="text" name="titulo" placeholder="titulo" class="form-control">
    <input type="submit" value="agregar cancion" class="btn btn-outline-dark" >
</form>
</div>
