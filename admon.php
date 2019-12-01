<?php 
session_start();
	if (isset($_SESSION['u_user'])){
	}
	else{
	header ("location: login.php");
	}
include ("includes/conex_DB.php");
$user = $_SESSION['u_user']; 
$encontrar=0;
$query = "SELECT * FROM usuarios WHERE user LIKE '%$user%' ORDER BY user";
$result = $conexion->query($query);
while ($row = $result->fetch_assoc()){
	$nivel = $row['nivel'];
	}
if ($nivel!=1){
  header ("location: usuario.php");
}
include('includes/header.php');
?>
<form class="col s2 right" action="conex_sesioncerrar.php" method="post">
<input class="btn waves-light" name="submit" type="submit" value="salir">
</form>
<br>
<br>
<br>
<?
if (isset($_GET['P'])){
?>
<center><h7 style='color: red'>Los productos se han eliminado<h7></center>
<?
}if (isset($_GET['S'])){
?>
<center><h7 style='color: green'>Productos subidos correctamente<h7></center>
<?
}
?>
<form class="col s12 " action="fotos.php" method="post">
<input class="btn waves-light" name="submit" type="submit" value="Subir Imagen">
</form>
<br>
<form class="col s12 " action="borrarP.php" method="post">
<input class="btn waves-light" name="submit" type="submit" value="Borrar Productos">
</form>
<br>
<form class="col s12 " action="subirP.php" method="post">
<div class="input-field col s6">
<i class="material-icons prefix">mode_comment</i>
<textarea id="Base" name="base" class="materialize-textarea"></textarea>
<label class="active" for="Base">Pege la base de datos aqui...</label>
</div>
<input class="btn waves-light" name="submit" type="submit" value="Subir Productos">
<br><br>
</form>
<?php include('includes/footer.php'); ?>