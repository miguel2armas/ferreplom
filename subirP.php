<?php 
$productos=$_POST['base'];
include ("includes/conex_DB.php");
$query = "INSERT INTO productos (codigo,descrip,precio1,precio2,precio3,iva,existen,costact) VALUES $productos;";
$result = $conexion->query($query);
  header ("location: admon.php?S=P");
?>
