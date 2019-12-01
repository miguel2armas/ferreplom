<?php 
session_start();
	if (isset($_SESSION['u_user'])){
	}
	else{
	header ("location: productos");
	}

include('includes/header.php');
include ("includes/conex_DB.php");
  if ($_GET)
  $id = $_GET['id'];
if(isset($id)){
  $query = "SELECT * FROM usuarios WHERE id = $id";
$result = $conexion->query($query);
while ($row1 = $result->fetch_assoc()){
		$usuario1 = $row1['user'];
		$empresa1 = $row1['empresa'];
		$imagen1 = $row1['imagen'];
}}
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
}
?>
 <div class="row ">
<div class="col s1 right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Salir', 4000)" data-position="bottom" data-delay="100" data-tooltip="Salir" href="conex_sesioncerrar.php"><i class="material-icons">input</i></a></div>
<div class="col s1 right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Productos', 4000)" data-position="bottom" data-delay="100" data-tooltip="Productos" href="productos"><i class="material-icons">shopping_basket</i></a></div>
<?
if ($nivel==2){
?>
<div class="col s1 right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Usuarios', 4000)" data-position="bottom" data-delay="100" data-tooltip="Usuarios" href="usuarios"><i class="material-icons">assignment_ind</i></a></div>
<?
}
if ($nivel <= 2){
?>
<div class="col  right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Perfil', 4000)" data-position="bottom" data-delay="100" data-tooltip="Perfil" href="usuario"><img src="data:image/jpg;base64,<?php echo base64_encode($imagen); ?>" width="19px"  class="circle responsive-img  dude-pic">&nbsp;<?php echo $nombres; ?></a>
</div></div>
<?
}
if ($nivel==3){
?>
<div class="col s1 right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Mi Vendedor', 4000)" data-position="bottom" data-delay="100" data-tooltip="Mi Vendedor" href="vendedor"><i class="material-icons">person_pin</i></a></div>
<div class="col  right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Perfil', 4000)" data-position="bottom" data-delay="100" data-tooltip="Perfil" href="usuario"><img src="data:image/jpg;base64,<?php echo base64_encode($imagen); ?>" width="19px"  class="circle responsive-img  dude-pic">&nbsp;<span><?php echo $_SESSION['u_user']; ?></span></a>
</div></div>

<?
}
?>

</div>
<center><h5>Compras Realizadas
<?
if ($nivel==2){
	echo "de ".$empresa1;
}
?>
</h5></center>
  <?
if ($nivel==3){ //consulta personal

  $nventa=0;
  $total=0;
  $comp=0;
  $query = "SELECT * FROM compras WHERE cliente = '$user' ORDER BY nventa DESC";
$result = $conexion->query($query);
while ($row = $result->fetch_assoc()){
	if($nventa!=$row['nventa']){
		if ($total!=0){
?>
<tr><td></td><td colspan="4" class="card-panel blue-grey lighten-2" ><h6><p style="font-size:18px" align="right">TOTAL: <?php echo number_format($total, 2, ',', '.'); ?> </p></h6></td></tr></tbody></table>
<?
			$total=0;	
		}
?>
<br><br><h5><div class="row ">
<div class="col s6"><p class="teal-text text-darken-2" style="font-size:18px"> N°: <?php echo $row['nventa']; ?> </p></div>
<div class="col s6"><p class="teal-text text-darken-2" align="right" style="font-size:18px">
<?php 
$fechaa = date( 'm/d/Y g:i A', strtotime($row['fecha']));
echo $fechaa;
?></p></div>
</div></h5>
<table >
  <thead class="card-panel grey">
  <tr>
    <th>Código</th>
    <th>Descripción</th>
    <th><p align="right">Cantidad</p></th>
    <th><p align="right">Precio</p></th>
    <th><p align="right">Subtotal</p></th>
    </tr>
  </thead>
  <tbody class="card-panel grey lighten-1">
<?
	}
	$nventa = $row['nventa'];
?>
<tr>
	<td><h7><p style="font-size:12px"><?php echo $row['codigo']; ?></h7></p></td>
	<td><h7><p style="font-size:12px"><?php echo $row['descrip']; ?></h7></p></td>
	<td><h7><p style="font-size:12px" align="right"><?php echo number_format($row['cantidad'], 2, ',', '.'); ?></h7></p></td>
	<td><h7><p style="font-size:12px" align="right"><?php echo number_format($row['precio'], 2, ',', '.'); ?></h7></p></td>
	<td><h7><p style="font-size:12px" align="right"><?php echo number_format($row['subtotal'], 2, ',', '.'); ?></h7></p></td>
</tr>
<?
$total = $total+$row['subtotal'];
}
?>
<tr><td></td><td colspan="4" class="card-panel blue-grey lighten-2" ><h6><p style="font-size:18px" align="right">TOTAL: <?php echo number_format($total, 2, ',', '.'); ?> </p></h6></td></tr></tbody></table><br>
<?
} //consulta personal

if ($nivel==2){
if(isset($id)){
  $nventa=0;
  $total=0;
  $comp=0;
  $query = "SELECT * FROM compras WHERE cliente = '$usuario1' ORDER BY nventa DESC";
$result = $conexion->query($query);
while ($row = $result->fetch_assoc()){
	if($nventa!=$row['nventa']){
		if ($total!=0){
?>
<tr><td></td><td colspan="4" class="card-panel blue-grey lighten-2" ><h6><p style="font-size:18px" align="right">TOTAL: <?php echo number_format($total, 2, ',', '.'); ?> </p></h6></td></tr></tbody></table>
<?
			$total=0;	
		}
?>
<br><br><h5><div class="row ">
<div class="col s6"><p class="teal-text text-darken-2" style="font-size:18px">ORDEN DE PEDIDO N°: <?php echo $row['nventa']; ?> </p></div>
<div class="col s6"><p class="teal-text text-darken-2" align="right" style="font-size:18px">
<?php 
$fechaa = date( 'm/d/Y g:i A', strtotime($row['fecha']));
echo $fechaa;
?></p></div>
</div></h5>
<table >
  <thead class="card-panel grey">
  <tr>
    <th>Código</th>
    <th>Descripción</th>
    <th><p align="right">Cantidad</p></th>
    <th><p align="right">Precio</p></th>
    <th><p align="right">Subtotal</p></th>
    </tr>
  </thead>
  <tbody class="card-panel grey lighten-1">
<?
	}
	$nventa = $row['nventa'];
?>
<tr>
	<td><h7><p style="font-size:12px"><?php echo $row['codigo']; ?></h7></p></td>
	<td><h7><p style="font-size:12px"><?php echo $row['descrip']; ?></h7></p></td>
	<td><h7><p style="font-size:12px" align="right"><?php echo number_format($row['cantidad'], 2, ',', '.'); ?></h7></p></td>
	<td><h7><p style="font-size:12px" align="right"><?php echo number_format($row['precio'], 2, ',', '.'); ?></h7></p></td>
	<td><h7><p style="font-size:12px" align="right"><?php echo number_format($row['subtotal'], 2, ',', '.'); ?></h7></p></td>
</tr>
<?
$total = $total+$row['subtotal'];
}
?>
<tr><td></td><td colspan="4" class="card-panel blue-grey lighten-2" ><h6><p style="font-size:18px" align="right">TOTAL: <?php echo number_format($total, 2, ',', '.'); ?> </p></h6></td></tr></tbody></table><br>
<?
}
}

?>

<?php include('includes/footer.php'); ?>