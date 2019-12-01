<?php 
	session_start();
session_start();
	if (isset($_SESSION['u_user'])){
	}
	else{
	header ("location: productos");
	}
include('includes/header.php');
include ("includes/conex_DB.php");

$user = $_SESSION['u_user']; 

$query = "SELECT * FROM usuarios WHERE user LIKE '%$user%' ORDER BY user";
$result = $conexion->query($query);
while ($row = $result->fetch_assoc()){
		$pw = $row['pw'];
		$nombres = $row['nombres'];
		$apellidos = $row['apellidos'];
		$empresa = $row['empresa'];
		$rif = $row['rif'];
		$nivel = $row['nivel'];
		$cod_vend = $row['cod_vend'];
		$direccion = $row['direccion'];
		$telefono = $row['telefono'];
		$correo = $row['correo'];
		$comentario = $row['comentario'];
		$activo = $row['activo'];
    $imagen = $row['imagen'];
if ($nivel==3){
	header ("location: usuario");
}
}
$arreglo=$_SESSION['carrito'];
$ncarrito=count($arreglo);
  ?>
 <div class="row ">
<div class="col s1 right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Salir', 4000)" data-position="bottom" data-delay="100" data-tooltip="Salir" href="conex_sesioncerrar.php"><i class="material-icons">input</i></a></div>
<div class="col right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Carrito', 4000)" data-position="bottom" data-delay="100" data-tooltip="Carrito" href="carritodecompras"><span style=' color: #212121; font-size:16px;'>(<?php echo $ncarrito; ?>)</span><i class="material-icons">shopping_cart</i></a></div>
<?php
if ($nivel > 1){
?>
<div class="col s1 right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Últimos Pedidos', 4000)" data-position="bottom" data-delay="100" data-tooltip="Últimos Pedidos" href="histcompras"><i class="material-icons">assignment</i></a></div>
<?
}
?>
<div class="col s1 right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Nuevo Usuario', 4000)" data-position="bottom" data-delay="100" data-tooltip="Nuevo Usuario" href="mnusuario"><i class="material-icons">person_add</i></a></div>
<div class="col  right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Perfil', 4000)" data-position="bottom" data-delay="100" data-tooltip="Perfil" href="usuario"><img src="data:image/jpg;base64,<?php echo base64_encode($imagen); ?>" width="19px"  class="circle responsive-img  dude-pic">&nbsp;<?php echo $nombres; ?></a>
</div>
</div>
<?php
if ($nivel == 2){
?>
<table class="striped">
  <thead>
  <tr>
    <th>Rif o Cedula</th>
    <th>Razón Social</th>
    <th colspan="2"><p align="center">Opciones</p></th>
    </tr>
  </thead>
  <tbody>
<?
  $query = "SELECT * FROM usuarios WHERE cod_vend = $cod_vend ORDER BY empresa";
  $result = $conexion->query($query);
  while ($row = $result->fetch_assoc()){
if ($row['nivel'] == 3){
?>
  <tr>
<td><? echo $row['rif']; ?></td>
<td><a href='data:image/jpg;base64,<?php echo base64_encode($imagen1); ?>' data-lightbox='roadtrip'><img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" width="38px"  class="circle responsive-img  dude-pic"></a>
  &nbsp;&nbsp;<? echo $row['empresa']; ?></td>
 <td width="40"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Pedidos', 4000)" data-position="bottom" data-delay="100" data-tooltip="Pedidos" href="admin.php?id=<?php echo $row['id'] ?>"><i class="material-icons">local_mall</i></a></td>
  <td width="40"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Modificar', 4000)" data-position="bottom" data-delay="100" data-tooltip="Modificar" href="mnusuario.php?id=<?php echo $row['id'] ?>"><i class="material-icons">mode_edit</i></a></td>
</tr>
<?
}
}
}
if ($nivel == 1){
?>
<table class="striped">
  <thead>
  <tr>
    <th>Código Vendedor</th>
    <th>Vendedor</th>
    <th >Opciones</th>
    </tr>
  </thead>
  <tbody>
<?
  $query = "SELECT * FROM usuarios WHERE nivel = 2 ORDER BY cod_vend";
  $result = $conexion->query($query);
  while ($row = $result->fetch_assoc()){
?>
 <tr>
<td><? echo $row['cod_vend']; ?></td>
<td><? echo $row['nombres']; ?> <? echo $row['apellidos']; ?> </td>
 <td width="40"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Modificar', 4000)" data-position="bottom" data-delay="100" data-tooltip="Modificar" href="mnusuario.php?id=<?php echo $row['id'] ?>"><i class="material-icons">mode_edit</i></a></td></tr>
<?
}
}
?>
</tbody></table>
<?
 include('includes/footer.php'); 
 ?>