<?php 
	session_start();
session_start();
	if (isset($_SESSION['u_user'])){
	}
	else{
	header ("location: product.php");
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
<div class="col s1 right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Mi Vendedor', 4000)" data-position="bottom" data-delay="100" data-tooltip="Mi Vendedor" href="vendedor"><i class="material-icons">person_pin</i></a></div>
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
		<h5><i class="material-icons">person_pin</i> Información Personal 
		<? 
		if ($nivel == 3){
			echo "Cliente";
		}
		if ($nivel == 2){
			echo "Vendedor";
		}
		 ?> <a href="updateProfile.php"><i class="white-text material-icons right tooltipped" data-position="right" data-delay="30" data-tooltip="Modificar tus datos personales">mode_edit</i></a></h5>
		<li class="divider"></li><br>
		<div class="row">
			<div class="col s7">
		<? 
		if ($nivel == 2){
		?>
			<span><b>Codigo de Vendedor:&nbsp;&nbsp;&nbsp;&nbsp;</b> <?php echo $cod_vend;?></span>
			<br><br><br>
		<? 
		}
		?>
			<span><b>Nombre:&nbsp;&nbsp;&nbsp;&nbsp;</b> <?php echo $nombres;?></span>
			<br>
			<span><b>Apellido:&nbsp;&nbsp;&nbsp;</b> <?php echo $apellidos;?></span>
			<br><br><br>
			<span><b>Usuario:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> <?php echo $user;?></span>
			<br>
			<span><b>Contraseña:&nbsp;</b> **** </span>
			<br><br><br>
			<span><b>Cedula o Rif:&nbsp;&nbsp;&nbsp;</b> <?php echo $rif;?></span>
			</div>
			<div class="col s5">
			<a href='data:image/jpg;base64,<?php echo base64_encode($imagen); ?>' data-lightbox='roadtrip'><img  class="mapa" width="120px" src="data:image/jpg;base64,<?php echo base64_encode($imagen); ?>"></a>
			</div>	
			<div class="col s12 ">
			<?
			if ($nivel == 3){
				?>
			<span><b>Razón Social:&nbsp;</b> <?php echo $empresa;?></span>
			</div>
			<?
			}
			?>
			</div>
			<div class="col s12 ">
			<br>
			<span><b>Dirección:&nbsp;</b> <?php echo $direccion;?></span>
			<br>
			<br>
			<span><b><h5>Información de Contacto:</h5></b></span>
			<span><b>Teléfono:&nbsp;</b> <?php echo $telefono;?></span>
			<br>
			<span><b>Correo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> <?php echo $correo;?></span>
			</div>
		</div>
	</div>

	<div class="row center-align valign">
		<div class="col s6 m4">
		<a class="blue-grey-text tooltipped" data-position="bottom" data-delay="30" data-tooltip="Modificar tus datos personales" href="updateProfile"><u>Editar Datos</u></a>
		</div>
		<div class="col s6 m4" >
		<a class="blue-grey-text tooltipped" data-position="bottom" data-delay="30" data-tooltip="Modificar  tu contraseña" href="updatePassword"><u>Editar Contraseña</u></a>
		</div>
		<div class="col s6 m4" >
		<a class="blue-grey-text tooltipped" data-position="bottom" data-delay="30" data-tooltip="Modificar  tu imagen" href="updateimagen"><u>Editar Imagen</u></a>
		</div>
		<div class="col s12 hide-on-med-and-up">
		<br>
	</div>
</div>

<?php include('includes/footer.php'); ?>