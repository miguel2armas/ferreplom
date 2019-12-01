<?php 
include ("includes/conex_DB.php");
$query = "DELETE FROM `productos`";
$result = $conexion->query($query);
   header ("location: admon.php?P=D");
?>
