<?php 
session_start();
	if (isset($_SESSION['u_user'])){
	}
	else{
	header ("location: product.php");
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
<div class="col  right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Perfil', 4000)" data-position="bottom" data-delay="100" data-tooltip="Perfil" href="usuario"><img src="data:image/jpg;base64,<?php echo base64_encode($imagen); ?>" width="19px"  class="circle responsive-img  dude-pic">&nbsp;<span><?php echo $_SESSION['u_user']; ?></span></a>
</div></div>

<?
}
?>
  <?
if ($nivel==2){
  $nventa=0;
  $nventa1=0;
  $total=0;
  $comp=0;
  $veces=0;
  $ncliente1="nulo";
  $ncliente="nulo";
  $empresa="nulo";
  $query = "SELECT * FROM compras WHERE cod_vend = '$cod_vend'";
$result = $conexion->query($query);
while ($row1 = $result->fetch_assoc()){
	$nventa=$row1['nventa'];
}
for($i=0;$i<10;$i++){// usar for
$query = "SELECT * FROM compras WHERE nventa = '$nventa'";
$result = $conexion->query($query);
while ($row2 = $result->fetch_assoc()){
$ncliente=$row2['cliente'];
}
$query = "SELECT * FROM usuarios WHERE user = '$ncliente'";
$result = $conexion->query($query);
while ($row3 = $result->fetch_assoc()){
$empresa=$row3['empresa'];
}
$query = "SELECT * FROM compras WHERE nventa = '$nventa' ORDER BY id DESC";
$result = $conexion->query($query);
while ($row4 = $result->fetch_assoc()){
if ($cod_vend==$row4['cod_vend']){
if ($ncliente1!=$row4['cliente']){
?>
<br><h5>Compras de 
<?php 
echo '"'.$empresa.'"';
}
if ($nventa1!=$row4['nventa']){
?>
</h5>
<h5><div class="row ">
<div class="col s6"><p class="teal-text text-darken-2" style="font-size:18px"><br>ORDEN DE PEDIDO N°: <?php echo $row4['nventa']; ?> </p></div>
<div class="col s6"><p class="teal-text text-darken-2" align="right" style="font-size:18px"><br>
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
	$nventa1 = $row4['nventa'];
?>
<tr>
	<td><h7><p style="font-size:12px"><?php echo $row4['codigo']; ?></h7></p></td>
	<td><h7><p style="font-size:12px"><?php echo $row4['descrip']; ?></h7></p></td>
	<td><h7><p style="font-size:12px" align="right"><?php echo number_format($row4['cantidad'], 2, ',', '.'); ?></h7></p></td>
	<td><h7><p style="font-size:12px" align="right"><?php echo number_format($row4['precio'], 2, ',', '.'); ?></h7></p></td>
	<td><h7><p style="font-size:12px" align="right"><?php echo number_format($row4['subtotal'], 2, ',', '.'); ?></h7></p></td>
</tr>
<?
$total = $total+$row4['subtotal'];
$ncliente1=$row4['cliente'];
$all=1;
}
}
if ($all==1){
if ($nventa>0){
?>
<tr><td></td><td></td><td colspan="3" class="card-panel blue-grey lighten-2" ><h6><p style="font-size:18px" align="right">TOTAL: <?php echo number_format($total, 2, ',', '.'); ?> </p></h6></td></tr></tbody></table><br>
<?
$all=2;
$total=0;
}}
$nventa=$nventa-1;
}}//fin de for
?>

<?php include('includes/footer.php'); ?>