<?php 
session_start();
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
}
?>
<?php if(isset($_SESSION['u_user'])){ ?>
 <div class="row ">
<div class="col s1 right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Salir', 4000)" data-position="bottom" data-delay="100" data-tooltip="Salir" href="conex_sesioncerrar.php"><i class="material-icons">input</i></a></div>
<div class="col s1 right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Carrito', 4000)" data-position="bottom" data-delay="100" data-tooltip="Carrito" href="carritodecompras.php"><i class="material-icons">shopping_cart</i></a></div>
<?
if ($nivel==3){
?>
<div class="col s1 right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Pedidos', 4000)" data-position="bottom" data-delay="100" data-tooltip="Pedidos" href="admin.php"><i class="material-icons">account_balance</i></a></div>
<?
}
if ($nivel <= 2){
?>
<div class="col s1 right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Usuarios', 4000)" data-position="bottom" data-delay="100" data-tooltip="Usuarios" href="usuarios.php"><i class="material-icons">assignment_ind</i></a></div>
<?
}
if ($nivel <= 2){
?>
<div class="col  right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Perfil', 4000)" data-position="bottom" data-delay="100" data-tooltip="Perfil" href="usuario.php"><img src="data:image/jpg;base64,<?php echo base64_encode($imagen); ?>" width="19px"  class="circle responsive-img  dude-pic">&nbsp;<?php echo $nombres; ?></a>
</div></div>
<?
}
if ($nivel==3){
?>
<div class="col  right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Perfil', 4000)" data-position="bottom" data-delay="100" data-tooltip="Perfil" href="usuario.php"><img src="data:image/jpg;base64,<?php echo base64_encode($imagen); ?>" width="19px"  class="circle responsive-img  dude-pic">&nbsp;<span><?php echo $_SESSION['u_user']; ?></span></a>
</div></div>

<?
}
?>
	<?php }else{ ?>

 <a class='dropdown-button btn right' href='#' data-activates='dropdown1'>Ingresar al Sistema</a>

  <ul id='dropdown1' class='dropdown-content'>
    <form class="container" action="conex_sesion.php" method="post">
    <li><p class="">Usuario:</p></li>
    <li><input id="first_name" type="text" class="validate" name="user" required autocomplete="off" /></li>

    <li>Contraseña:</li>
    <li><input id="last_name" type="password" class="validate" name="pass" required /></li>
    <li><button class="btn waves-effect waves-light right" type="submit" name="action">Ok</li>
    </form>
  </ul></div>
<?php
if (isset($_GET['acce'])){
?>
<center><h7 style='color: red'>Acceso denegado, por favor contacte a su representante de ventas.<h7></center>
<?
	}
		if (isset($_GET['acceso'])){
?>
<center><h7 style='color: red'>Usuario o Clave invalida.<h7></center>
<?
}} //hasta aqui en usuario?>


<table width="700" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="262">
   <form class="container" action="" method="post">
<div class="row">
<div class="input-field col s12">
<input id="COD" type="text" class="validate" name="COD" />
<label for="COD">Código</label>
</div>
</div>
<div class="row">
<button class="btn waves-effect waves-light" type="submit" name="action">Buscar

</button>
</div>
    </form></td>
    <td width="514"><form class="container" action="" method="post">
<div class="row">
<div class="input-field col s12">
<input id="DESC" type="text" class="validate" name="DESC" />
<label for="DESC">Descripción</label>
</div>
</div>
<div class="row">
<button class="btn waves-effect waves-light" type="submit" name="action">Buscar

</button>
</div>
    </form></td>
  </tr>
</table>
<lu class="galeria">
<div class="row">
  <?
if ($_POST)
	$COD = $_POST['COD'];
	$DESC = $_POST['DESC'];
$itemPS=$_GET['pagi'];
$pagA =$itemPS-12; 
$totalE = -1;
$query = "SELECT * FROM productos";
$result = $conexion->query($query);
while ($row = $result->fetch_assoc()){
	$img = $row['codigo'];
	$totalE= $totalE+1;
}
?>
  <?
if (empty($itemPS)) {
	$itemPS=0;
}// consulta normal
if (empty($COD) and empty($DESC)) {
$query = "SELECT * FROM productos limit $itemPS,$totalE";
$result = $conexion->query($query);
while ($row = $result->fetch_assoc()){
	$img = $row['codigo'];
	$existen = $row['existen'];
	$descrip = $row['descrip'];
	$precio1 = $row['precio1'];
	if ($cont1<12){
		$itemPS=$itemPS+1;
	if ($existen>0){
	$cont1= $cont1+1;
	echo "<div class='col s4 m3'> <div class='card'> <div class='card-image'> <li><a href='img/p/$img.jpg' data-lightbox='roadtrip' title='$img - $descrip";
	if(isset($_SESSION['u_user'])){
	echo " - Precio sin IVA: ";
	 echo number_format($precio1, 2, ',', '.');
	}
	 echo "'><img src='img/p/$img.jpg'></a></li>";
	if(isset($_SESSION['u_user'])){
	 echo "<a href='carritodecompras.php?id=$img' class='btn-floating halfway-fab waves-effect waves-light right'><i class='material-icons'>add_shopping_cart</i></a>";
	}
	 echo "</div> <div class='card-content'><span style='font-size:14px' class='card-title activator green-text text-darken-2 truncate'>$img";

	 echo "</span><div class='card-reveal'><span style='align=center font-size:15px' class='card-title green-text text-darken-2'>$img</span><br><p style='font-size:12px'>$descrip<br>";
	if(isset($_SESSION['u_user'])){
	 echo "<br>Precio sin IVA: ";
	echo number_format($precio1, 2, ',', '.');
	?>
	<p>Existencia: <?php echo number_format($row['existen'], 2, ',', '.'); ?></p>
	<?
	}
	 echo "</p>";
if(isset($_SESSION['u_user'])){
	 echo "<a href='carritodecompras.php?id=$img' class='btn-floating halfway-fab waves-effect waves-light right'><i class='material-icons'>add_shopping_cart</i></a>";
}
	 echo "</div><p style='font-size:12px'>";
	if(isset($_SESSION['u_user'])){
	 echo "Precio sin IVA:<br>";
	echo number_format($precio1, 2, ',', '.');
	?>
	<p style="font-size:12px">Existencia: <br><?php echo number_format($row['existen'], 2, ',', '.'); ?></p>
	<?
	}
	 echo "</p> </div></div></div>";
	}
	}
}
?>
</div>
</lu>
<?
$div = $totalE / 12;
$div = $div +1;
//echo round($div);
$totald=($totalE/12)+1;
$totals=$itemPS/12;
if ($totals>intval($totals)){
	$totals=intval($totals)+1;
}
if ($totals<intval($totals)){
	$totals=intval($totals)-1;
}
$totalp=0;
?>
<center><div class="container">
 <ul class="pagination">
 <?
 if ($totals>1){
 ?>
    <li class="waves-effect">
<?
echo "<a href='product.php?pagi=".($totals*12-24)."'>";
?>
<i class="material-icons">chevron_left</i></a></li>
<?
}
$i = $totals-2;
if ($i<1){
	$i=1;
}
$i2=$i+5;
if ($i2>($totald+1)){
if ($i2>($totald+2)){
$i=$i-2;
$i2=$i+5;
$ver=true;
}else{
$i=$i-1;
$i2=$i+5;
}}
for($i;$i<$i2;$i++){
?>
<li class="
<?
if ($i==$totals){
	echo "active disabled";
}else{
	echo "waves-effect";
}
?>
">
<?
if ($i!=$totals){
	$totalp=($i*12)-12;
	echo "<a href='product.php?pagi=$totalp'>";
}
?>
<?php echo $i;
if ($i!=$totals){
echo "</a>";
}
 ?>
</li>
<?
}
 if ($totalE>$itemPS){
?>
    <li class="waves-effect">
<?
echo "<a href='product.php?pagi=".($totals*12)."'>";
?>
    	<i class="material-icons">chevron_right</i></a></li>
<?
}
?>
  </ul></div><br><br>
</center>
<?
//hasta aqui consulta normal
}
else{
	if (isset($COD) and isset($DESC)){
		echo "solo buscar por codigo o por pedido, no por ambas";
	}
	else{
		if (isset($COD)){
			//codigo de busqueda de codigo
					$query = "SELECT * FROM productos WHERE codigo LIKE '%$COD%' ORDER BY codigo";
					$result = $conexion->query($query);
					while ($row = $result->fetch_assoc()){
					$img = $row['codigo'];
					$existen = $row['existen'];
					$descrip = $row['descrip'];
					$precio1 = $row['precio1'];
					round($precio1,2);
					if ($cont1<12){
					$itemPS=$itemPS+1;
					if ($existen>0){
					$cont1= $cont1+1;
	echo "<div class='col s4 m3'> <div class='card'> <div class='card-image'> <li><a href='img/p/$img.jpg' data-lightbox='roadtrip' title='$img - $descrip";
	if(isset($_SESSION['u_user'])){
	echo " - Precio sin IVA: ";
	 echo number_format($precio1, 2, ',', '.');
	}
	 echo "'><img src='img/p/$img.jpg'></a></li>";
	if(isset($_SESSION['u_user'])){
	 echo "<a href='carritodecompras.php?id=$img' class='btn-floating halfway-fab waves-effect waves-light right'><i class='material-icons'>add_shopping_cart</i></a>";
	}
	 echo "</div> <div class='card-content'><span style='font-size:14px' class='card-title activator green-text text-darken-2 truncate'>$img";
	if(isset($_SESSION['u_user'])){
	 echo "<br><i class='material-icons right'>more_vert</i>";
	}
	 echo "</span><div class='card-reveal'><span style='font-size:15px' class='card-title green-text text-darken-2'>$img</span><br><p style='font-size:12px'>$descrip<br>";
	if(isset($_SESSION['u_user'])){
	 echo "<br>Precio sin IVA: ";
	echo number_format($precio1, 2, ',', '.');
	?>
	<p>Existencia: <?php echo number_format($row['existen'], 2, ',', '.'); ?></p>
	<?
	}
	 echo "</p>";
if(isset($_SESSION['u_user'])){
	 echo "<a href='carritodecompras.php?id=$img' class='btn-floating halfway-fab waves-effect waves-light right'><i class='material-icons'>add_shopping_cart</i></a>";
}
	 echo "</div><p style='font-size:11px'>";
	if(isset($_SESSION['u_user'])){
	 echo "Precio sin IVA:<br>";
	echo number_format($precio1, 2, ',', '.');
	?>
	<p style="font-size:12px">Existencia: <br><?php echo number_format($row['existen'], 2, ',', '.'); ?></p>
	<?
	}
	 echo "</p> </div></div></div>";
	}
	}
}
?>
</div>
</lu>
<?
					$div = $totalE / 12;
					$div = $div +1;
					//echo round($div);
					echo "<center><h5>";
					echo "<a href='product.php'><img src='img/home1.png' width='65' height='40'></a>";
					//echo "<a href='producto2.php'> (pagina siguiente)</a>";
					echo "</center></h5>";
			}
			else{
			//codigo de busqueda de descripcion
					$query = "SELECT * FROM productos WHERE descrip LIKE '%$DESC%' ORDER BY descrip";
					$result = $conexion->query($query);
					while ($row = $result->fetch_assoc()){
					$img = $row['codigo'];
					$existen = $row['existen'];
					$descrip = $row['descrip'];
					$precio1 = $row['precio1'];
					round($precio1,2);
					if ($cont1<12){
					$itemPS=$itemPS+1;
					if ($existen>0){
					$cont1= $cont1+1;
	echo "<div class='col s4 m3'> <div class='card'> <div class='card-image'> <li><a href='img/p/$img.jpg' data-lightbox='roadtrip' title='$img - $descrip";
	if(isset($_SESSION['u_user'])){
	echo " - Precio sin IVA: ";
	 echo number_format($precio1, 2, ',', '.');
	}
	 echo "'><img src='img/p/$img.jpg'></a></li>";
	if(isset($_SESSION['u_user'])){
	 echo "<a href='carritodecompras.php?id=$img' class='btn-floating halfway-fab waves-effect waves-light right'><i class='material-icons'>add_shopping_cart</i></a>";
	}
	 echo "</div> <div class='card-content'><span style='font-size:14px' class='card-title activator green-text text-darken-2 truncate'>$img";
	if(isset($_SESSION['u_user'])){
	 echo "<br><i class='material-icons right'>more_vert</i>";
	}
	 echo "</span><div class='card-reveal'><span style='font-size:15px' class='card-title green-text text-darken-2'>$img</span><br><p style='font-size:12px'>$descrip<br>";
	if(isset($_SESSION['u_user'])){
	 echo "<br>Precio sin IVA: ";
	echo number_format($precio1, 2, ',', '.');
	?>
	<p>Existencia: <?php echo number_format($row['existen'], 2, ',', '.'); ?></p>
	<?
	}
	 echo "</p>";
if(isset($_SESSION['u_user'])){
	 echo "<a href='carritodecompras.php?id=$img' class='btn-floating halfway-fab waves-effect waves-light right'><i class='material-icons'>add_shopping_cart</i></a>";
}
	 echo "</div><p style='font-size:11px'>";
	if(isset($_SESSION['u_user'])){
	 echo "Precio sin IVA:<br>";
	echo number_format($precio1, 2, ',', '.');
	?>
	<p style="font-size:12px">Existencia: <br><?php echo number_format($row['existen'], 2, ',', '.'); ?></p>
	<?
	}
	 echo "</p> </div></div></div>";
	}
	}
}
?>
</div>
</lu>
<?
					$div = $totalE / 12;
					$div = $div +1;
					//echo round($div);
					echo "<center><h5>";
					echo "<a href='product.php'><img src='img/home1.png' width='65' height='40'></a>";
					//echo "<a href='producto2.php'> (pagina siguiente)</a>";
					echo "</center></h5>";
				}
	}
	
}
?>
</p>

<?php include('includes/footer.php'); ?>