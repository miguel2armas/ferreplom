<?php
	session_start();
	if (isset($_SESSION['u_user'])){
	}
	else{
	header ("location: product.php");
	}
	include('includes/header.php');
	include ("includes/conex_DB.php");
	if ($_GET)
	$cod = $_GET['id'];
	if(isset($_GET['id'])){
	if(isset($_SESSION['carrito'])){
		$arreglo=$_SESSION['carrito'];
		$encontro=false;
		$numero=0;
		for($i=0;$i<count($arreglo);$i++){
			if($arreglo[$i][Img]==$cod){
				$encontro=true;
				$numero=$i;
		}}
		if($encontro==true){
			$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
			$_SESSION['carrito']=$arreglo;
		}else{
			$img="";
			$existen=0;
			$descrip="";
			$precio1=0;
$query = "SELECT * FROM productos where codigo LIKE '$cod'";
$result = $conexion->query($query);
while ($row = $result->fetch_assoc()){
	$img = $row['codigo'];
	$existen = $row['existen'];
	$descrip = $row['descrip'];
	$precio1 = $row['precio1'];
		}
		$datosnuevos=array('Img'=>$cod,
						'Existen'=>$existen,
						'Descrip'=>$descrip,
						'Precio1'=>$precio1,
						'Cantidad'=>1);
		array_push($arreglo, $datosnuevos);
		$_SESSION['carrito']=$arreglo;
		}
	}else{
		if(isset($_GET['id'])){
			$img="";
			$existen=0;
			$descrip="";
			$precio1=0;
$query = "SELECT * FROM productos where codigo LIKE '$cod'";
$result = $conexion->query($query);
while ($row = $result->fetch_assoc()){
	$img = $row['codigo'];
	$existen = $row['existen'];
	$descrip = $row['descrip'];
	$precio1 = $row['precio1'];
		}
		$arreglo[]=array('Img'=>$cod,
						'Existen'=>$existen,
						'Descrip'=>$descrip,
						'Precio1'=>$precio1,
						'Cantidad'=>1);
		$_SESSION['carrito']=$arreglo;
	}}}
$user = $_SESSION['u_user']; 
$query = "SELECT * FROM usuarios WHERE user = '$user'";
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
</div>

<lu class="galeria">
<div class="row">
<?php
$total=0;
if(isset($_SESSION['carrito'])){
	$datos=$_SESSION['carrito'];
	$total=0;
	for($i=0; $i < count($datos); $i++){

?>
<div class="col s4 m4"> <div class="card"> <div class="card-image"> <li><a href="img/p/<?php echo $datos[$i]['Img'];?>.jpg" data-lightbox="roadtrip" title="<?php echo $datos[$i]['Img'];?> - <?php echo $datos[$i]['Descrip'];?> - Precio sin IVA: <?php echo number_format($datos[$i]['Precio1'], 2, ',', '.'); ?>"><img src="img/p/<?php echo $datos[$i]['Img'];?>.jpg"></a></li>
	 <a href="#" class="eliminar btn-floating halfway-fab waves-effect waves-light right" class="btn-floating halfway-fab waves-effect waves-light right" data-img="<?php echo $datos[$i]['Img']; ?>"><i class="material-icons">delete</i></a></div> <div class="card-content"><p style='font-size:19px'  class='green-text text-darken-2 truncate'><?php echo $datos[$i]['Img'];?></p><p style='font-size:10px' class='truncate'><?php echo $datos[$i]['Descrip'];?></p> <p style="font-size:13px">Precio sin IVA: <?php echo number_format($datos[$i]['Precio1'], 2, ',', '.'); ?></p><p style="font-size:13px">Existencia: <?php echo number_format($datos[$i]['Existen'], 0, ',', '.'); ?></p>
	 	<input id="search" name="campo_numerico"  placeholder="Cantidad" type="number" value="<?php echo $datos[$i]['Cantidad']; ?>"
	 		data-precio="<?php echo $datos[$i]['Precio1'];?>"
	 		data-img="<?php echo $datos[$i]['Img']; ?>"
	 		class="cantidad">
	 	<p style="font-size:11px" class="subtotal">Sub: <?php echo number_format($datos[$i]['Precio1']*$datos[$i]['Cantidad'], 2, ',', '.'); ?></p></div></div></div>
<?php
	$total=($datos[$i]['Cantidad']*$datos[$i]['Precio1'])+$total;
	}

}else{
	echo "<br><div><center><h5>El Carrito de Compras está Vacío</h5></center></div>";
}
?>
</div></lu>
<?
echo "<center><h5 id='total'>Total a Pagar: ".number_format($total, 2, ',', '.')."</h5></center>";
?>
<center><h6 style='color: red'>Este monto es neto y sin ningún tipo de débito (IVA, CARGOS) o crédito (DESCUENTOS, PROMOCIONES, OFERTAS)</h6></center>
<?
if($total!=0){
	if($nivel==3){
?>
	<div class="col s1 center"><a class="tooltipped waves-effect waves-light btn col  modal-trigger" onclick="Materialize.toast('Comprar', 4000)" data-position="bottom" data-delay="100" href="#comprar"><i class="material-icons right">send</i>Enviar Pedido</a></div>
<?
}
}
?>
<center><a href='productos'><img src='img/home1.png' width='65' height='40'></a></center>


	<div id="comprar" class="modal">
		<div class="modal-content container">

			<h5><p>¿Estás seguro de enviar el pedido?</p></h5>
			<p>El pedido enviado será revisado por el representante de ventas de su zona, quien se encargara de las modificaciones (si son necesarias) por cantidades mínimas o por cambios en precios y envió del pedido a nuestra empresa, en caso de algún inconveniente el vendedor se contactara con ustedes.<br><br> ! Gracias por Preferirnos...!</p>
		</div>
		<div class="modal-footer">
			<a href="#cancelar" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
			<a href="compras.php" class="modal-action modal-close waves-effect waves-red btn-flat">Enviar Pedido</a>
		</div>
	</div>

<?php
 include('includes/footer.php');
 ?>
