<?php 

include('includes/header.php');
include ("includes/conex_DB.php");
?>
<br><br>
<lu class="galeria">
<div class="row">
<?php
$query = "SELECT * FROM usuarios WHERE nivel = 2 ORDER BY cod_vend";
$result = $conexion->query($query);
while ($row = $result->fetch_assoc()){
		$nombres = $row['nombres'];
		$apellidos = $row['apellidos'];
		$cod_vend = $row['cod_vend'];
		$direccion = $row['direccion'];
		$telefono = $row['telefono'];
		$correo = $row['correo'];
		$activo = $row['activo'];
		$zona = $row['zona'];
		$imagen = $row['imagen'];
if ($activo == 1){
?>
  <div class="col s4 m3">
    <div class="card horizontal">
      <div class="card-image">
        <a href='data:image/jpg;base64,<?php echo base64_encode($imagen); ?>' data-lightbox='roadtrip'><img  class="mapa" src="data:image/jpg;base64,<?php echo base64_encode($imagen); ?>"></a>
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p style='font-size:11px'>Zona:  <br><b class="truncate"><?php echo $zona;?></b></p>
         <div class="teal lighten-3">
         	<p style='font-size:4px'><i class="material-icons">face</i> &nbsp;</p>
         	<p style='font-size:12px'><b class="truncate"><?php echo $nombres;?></b></p>
          <p style='font-size:11px'></p><p style='font-size:12px'>
          	<b class="truncate"><?php echo $apellidos;?></b></p>
      	 </div>
      	 <div class="teal lighten-4">
          <p style='font-size:11px'><b><i class="material-icons">phone</i><br> &nbsp;<?php 
          echo substr($telefono, 0, 12);
          ?></b></p>
      	</div>
      	<div>
          <p style='font-size:11px'><i class="material-icons">mail</i><br> &nbsp;<b><?php
			$findme   = '@';
			$pos = strpos($correo, $findme);
			echo substr($correo, 0, $pos);
			echo "<br>";
			echo substr($correo, $pos, 100);
           ?></b></p>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php 
}}
?>
</div></lu>
<div class="row">
<div class='col s4 m3'>
<h7 style='color: #f79646'><i class="material-icons">done_all</i> &nbsp;Zona: El Vigia</h7><br>
</div>
<div class='col s4 m3'>
<h7 style='color: #9bbb59'><i class="material-icons">done_all</i> &nbsp;Zona: Zulia</h7><br>
</div>
<div class='col s4 m3'>
<h7 style='color: #4bacc6'><i class="material-icons">done_all</i> &nbsp;Zona: Mocoties-Ejido</h7><br>
</div>
<div class='col s4 m3'>
<h7 style='color: #125215'><i class="material-icons">done_all</i> &nbsp;Zona: San Cristobal</h7><br>
</div>
<div class='col s4 m3'>
<h7 style='color: #c0504d'><i class="material-icons">done_all</i> &nbsp;Zona: Merida-Paramo</h7><br>
</div>
<div class='col s4 m3'>
<h7><i class="material-icons">done_all</i> &nbsp;Zona: Panamericana</h7>
</div>
<div class='col s4 m3'>
<h7 style='color: #8064a2'><i class="material-icons">done_all</i> &nbsp;Zona: Táchira</h7><br>
</div>
</div>
<p>&nbsp;&nbsp;<img class="mapa" src="img/mapav.jpg" width="800" height="541"></p>
<p>&nbsp;</p>
<?
include('includes/footer.php'); 
?>