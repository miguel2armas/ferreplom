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

?>

<?php 
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
$query = "SELECT * FROM usuarios WHERE cod_vend = '$cod_vend'";
$result = $conexion->query($query);
while ($row1 = $result->fetch_assoc()){
	if ($row1['nivel']==2){
		$nombres1 = $row1['nombres'];
		$apellidos1 = $row1['apellidos'];
		$cod_vend1 = $row1['cod_vend'];
		$telefono1 = $row1['telefono'];
		$correo1 = $row1['correo'];
    	$imagen1 = $row1['imagen'];
}
}
$arreglo=$_SESSION['carrito'];
$ncarrito=count($arreglo);
	?>
 <div class="row ">
<div class="col s1 right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Salir', 4000)" data-position="bottom" data-delay="100" data-tooltip="Salir" href="conex_sesioncerrar.php"><i class="material-icons">input</i></a></div>
<div class="col right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Carrito', 4000)" data-position="bottom" data-delay="100" data-tooltip="Carrito" href="carritodecompras"><span style=' color: #212121; font-size:16px;'>(<?php echo $ncarrito; ?>)</span><i class="material-icons">shopping_cart</i></a></div>
<?
if ($nivel==3){
?>
<div class="col s1 right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Pedidos', 4000)" data-position="bottom" data-delay="100" data-tooltip="Pedidos" href="admin"><i class="material-icons">account_balance</i></a></div>
<div class="col  right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Perfil', 4000)" data-position="bottom" data-delay="100" data-tooltip="Perfil" href="usuario"><img src="data:image/jpg;base64,<?php echo base64_encode($imagen); ?>" width="19px"  class="circle responsive-img  dude-pic">&nbsp;<span><?php echo $_SESSION['u_user']; ?></span></a>
</div></div>
<?
}
if ($nivel <= 2){
?>
<div class="col s1 right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Usuarios', 4000)" data-position="bottom" data-delay="100" data-tooltip="Usuarios" href="usuarios"><i class="material-icons">assignment_ind</i></a></div>
<?
}
?>
</div>
<div class="container">
	<div class="card-panel blue-grey lighten-1 white-text">
		<h5><i class="material-icons">person_pin</i> Información de mi Vendedor</a></h5>
		<li class="divider"></li><br>
		<div class="row">
			<div class="col s7">
			<span><b>Codigo de Vendedor:&nbsp;&nbsp;&nbsp;&nbsp;</b> <?php echo $cod_vend1;?></span>
			<br><br><br>
			<span><b>Nombre:&nbsp;&nbsp;&nbsp;&nbsp;</b> <?php echo $nombres1;?></span>
			<br>
			<span><b>Apellido:&nbsp;&nbsp;&nbsp;</b> <?php echo $apellidos1;?></span>

			</div>
			<div class="col s5">
			<a href='data:image/jpg;base64,<?php echo base64_encode($imagen1); ?>' data-lightbox='roadtrip'><img  class="mapa" src="data:image/jpg;base64,<?php echo base64_encode($imagen1); ?>"></a>
			</div>	
			<div class="col s12 ">
			<span><b><h5>Información de Contacto:</h5></b></span>
			<span><b>Teléfono:&nbsp;</b> <?php echo $telefono1;?></span>
			<br>
			<span><b>Correo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> <?php echo $correo1;?></span>
			</div>
		</div>
	</div>
<?php include('includes/footer.php'); ?>