<?php 
include('includes/header.php');
?>
 <div class="row ">
      <div class="col s1"><a class="btn tooltipped btn-floating btn-large pulse" onclick="Materialize.toast('Todos Los Productos', 4000)" data-position="bottom" data-delay="100" data-tooltip="Todos" href="product.php"><i class="material-icons">filter_none</i></a></div>
      <div class="col s1"><a class="btn tooltipped btn-floating btn-large pulse" onclick="Materialize.toast('Electricidad', 4000)"  data-position="bottom" data-delay="100" data-tooltip="Electricidad" href="productelectricidad.php"><i class="material-icons">filter_1</i></a></div>
      <div class="col s1"><a class="btn tooltipped btn-floating btn-large pulse" onclick="Materialize.toast('Herramientas', 4000)"data-position="bottom" data-delay="100" data-tooltip="Herramientas" href="productherramientas.php"><i class="material-icons">filter_2</i></a></div>
      <div class="col s1"><a class="btn tooltipped btn-floating btn-large pulse" onclick="Materialize.toast('Pintura', 4000)" data-position="bottom" data-delay="100" data-tooltip="Pintura" href="productpintura.php"><i class="material-icons">filter_3</i></a></div>
      <div class="col s1"><a class="btn tooltipped btn-floating btn-large pulse" onclick="Materialize.toast('Plástico', 4000)" data-position="bottom" data-delay="100" data-tooltip="Plástico" href="productplastico.php"><i class="material-icons">filter_4</i></a></div>
      <div class="col s1"><a class="btn-floating btn-large pulse disabled"><i class="material-icons">filter_5</i></a></div>
      <div class="col s1"><a class="btn tooltipped btn-floating btn-large pulse"onclick="Materialize.toast('PVC', 4000)"  data-position="bottom" data-delay="100" data-tooltip="PVC" href="productpvc.php"><i class="material-icons">filter_6</i></a></div>
      <div class="col s1"><a class="btn tooltipped btn-floating btn-large pulse"onclick="Materialize.toast('Otros', 4000)"  data-position="bottom" data-delay="100" data-tooltip="Otros" href="productotros.php"><i class="material-icons">filter_7</i></a></div>
</div>
<table width="700" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="262">
   <form class="container" action="" method="post">
<div class="row">
<div class="input-field col s12">
<input id="COD" type="text" class="validate" name="COD" />
<label for="COD">Codigo</label>
</div>
</div>
<div class="row">
<button class="btn waves-effect waves-light" type="submit" name="action">Buscar
<i class="mdi-content-send right"></i>
</button>
</div>
    </form></td>
    <td width="514"><form class="container" action="" method="post">
<div class="row">
<div class="input-field col s12">
<input id="DESC" type="text" class="validate" name="DESC" />
<label for="DESC">Descripcion</label>
</div>
</div>
<div class="row">
<button class="btn waves-effect waves-light" type="submit" name="action">Buscar
<i class="mdi-content-send right"></i>
</button>
</div>
    </form></td>
  </tr>
</table>
<lu class="galeria">
<p>
  <?
if ($_POST)
	$COD = $_POST['COD'];
	$DESC = $_POST['DESC'];
$itemPS=$_GET['pagi'];
$pagA =$itemPS-12; 
include ("includes/conex_DB.php");
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
$query = "SELECT * from productos WHERE productos.codigo IN (SELECT codigo from plomeria) limit $itemPS,$totalE";
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
	echo "<li><a href='img/p/$img.jpg' data-lightbox='roadtrip' title='$img - $descrip - Precio sin IVA: ";
	 echo number_format($precio1, 2, ',', '.');
	 echo "'> <img src='img/p/$img.jpg'></a></li>";
	}
	}
}
echo "</lu>";
$div = $totalE / 12;
$div = $div +1;
//echo round($div);
echo "<center><h5>";
if ($pagA>=0){
	echo "<a href='productplomeria.php?pagi=$pagA'><img src='img/ant1.png' width='65' height='40'></a>";
	echo "&nbsp;";
	}
echo "<a href='productplomeria.php'><img src='img/home1.png' width='65' height='40'></a>";
echo "&nbsp;";
echo "<a href='productplomeria.php?pagi=$itemPS'><img src='img/sig1.png' width='65' height='40'></a>";

//echo "<a href='producto2.php'> (pagina siguiente)</a>";
echo "</center></h5>";
}
else{
	if (isset($COD) and isset($DESC)){
		echo "solo buscar por codigo o por descripcion, no por ambas";
	}
	else{
		if (isset($COD)){
			//codigo de busqueda de codigo
					$query = "SELECT * from productos WHERE productos.codigo IN (SELECT codigo from plomeria WHERE codigo LIKE '%$COD%' ORDER BY codigo)";
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
					echo "<li><a href='img/p/$img.jpg' data-lightbox='roadtrip' title='$img - $descrip - Precio sin IVA: ";
					 echo number_format($precio1, 2, ',', '.');
					 echo "'> <img src='img/p/$img.jpg'></a></li>";
						}
					}
					}
					echo "</lu>";
					$div = $totalE / 12;
					$div = $div +1;
					//echo round($div);
					echo "<center><h5>";
					echo "<a href=productplomeria.php><img src='img/home1.png' width='65' height='40'></a>";
					//echo "<a href='producto2.php'> (pagina siguiente)</a>";
					echo "</center></h5>";
			}
			else{
			//codigo de busqueda de descripcion
					$query = "SELECT * from productos WHERE productos.descrip IN (SELECT descrip from plomeria WHERE descrip LIKE '%$DESC%' ORDER BY codigo)";
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
					echo "<li><a href='img/p/$img.jpg' data-lightbox='roadtrip' title='$img - $descrip - Precio sin IVA: ";
					 echo number_format($precio1, 2, ',', '.');
					 echo "'> <img src='img/p/$img.jpg'></a></li>";
						}
					}
					}
					echo "</lu>";
					$div = $totalE / 12;
					$div = $div +1;
					//echo round($div);
					echo "<center><h5>";
					echo "<a href=productplomeria.php><img src='img/home1.png' width='65' height='40'></a>";
					//echo "<a href='producto2.php'> (pagina siguiente)</a>";
					echo "</center></h5>";
				}
	}
	
}
?>
</p>

<?php include('includes/footer.php'); ?>