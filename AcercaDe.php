<?php 
include('includes/header.php');
?>

<div class="container">
	<div class="row">
		<h2 class="col s12 header center green-text text-lighten-2">
			Acerca del Proyecto
		</h2>
	</div>
	<div class="row">
		<div class="col s12 m6">
		  <h5 class="center green-text">
			Trabajo especial de grado de Miguel Ángel Armas Moreno para optar por el título TSU en Informática en el IUTCM.
			E-mail: miguel2.am@hotmail.com	</h5>
		  <h5 class="center green-text"><span class="center blue-text">visitas =
              <? 
$archivo = "contador.txt"; 
$contador = 0; 

$fp = fopen($archivo,"r"); 
$contador = fgets($fp, 26); 
fclose($fp);
echo $contador; 
?>
          </span><br>
	      </h5>
		</div>
		<div class="col s12 m6 center-align">
			<img width="200" src="img/iutcm.png">
		</div>
	</div>
    <h6>&nbsp;</h6>
</div>
<?php include('includes/footer.php'); ?>