<?php 
 session_start();
  if (isset($_SESSION['u_user'])){
  }
  else{
  header ("location: productos");
  }
include('includes/header.php');
include ("includes/conex_DB.php");

$user = $_SESSION['u_user']; 
$arreglo=$_SESSION['carrito'];
$ncarrito=count($arreglo);
$query = "SELECT * FROM usuarios WHERE user LIKE '%$user%' ORDER BY user";
$result = $conexion->query($query);
while ($row = $result->fetch_assoc()){
    $nombres = $row['nombres'];
    $imagen = $row['imagen'];
}
if(isset($_FILES['imagen']['tmp_name'])){
$tiposi = array("image/jpeg","image/jpg","image/png");
if (in_array($_FILES["imagen"]["type"],$tiposi) &&  $_FILES['imagen']['size'] >= 307200 ) {
  header ("location: updateimagen.php?foto=invalida");
} else {
$imagen =  addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
  $query = "UPDATE usuarios SET imagen='$imagen' WHERE user = '$user'";
$resul = $conexion->query($query);
if ($resul){
?>
 <script type="text/javascript"> 
            window.location="usuario"; 
  </script> 
<?php
    } 
else{
    echo "no modificado";
  }
}}

?>
 <div class="row ">
<div class="col s1 right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Salir', 4000)" data-position="bottom" data-delay="100" data-tooltip="Salir" href="conex_sesioncerrar.php"><i class="material-icons">input</i></a></div>
<div class="col right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Carrito', 4000)" data-position="bottom" data-delay="100" data-tooltip="Carrito" href="carritodecompras"><span style=' color: #212121; font-size:16px;'>(<?php echo $ncarrito; ?>)</span><i class="material-icons">shopping_cart</i></a></div>
<?
if ($nivel <= 2){
?>
<div class="col  right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Perfil', 4000)" data-position="bottom" data-delay="100" data-tooltip="Perfil" href="usuario"><img src="data:image/jpg;base64,<?php echo base64_encode($imagen); ?>" width="19px"  class="circle responsive-img  dude-pic">&nbsp;<?php echo $nombres; ?></a>
</div>
<?
}
if ($nivel==3){
?>
<div class="col  right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Perfil', 4000)" data-position="bottom" data-delay="100" data-tooltip="Perfil" href="usuario"><img src="data:image/jpg;base64,<?php echo base64_encode($imagen); ?>" width="19px"  class="circle responsive-img  dude-pic">&nbsp;<span><?php echo $_SESSION['u_user']; ?></span></a>
</div></div>

<?
}
?>
 <div class="container">
 <div class="row">
    <?php if(isset($resp)){?>
        <p><?php echo $resp ?></p>
    <?php }else{ echo '<br>'; } ?>
    <form class="col s12" method="post" enctype="multipart/form-data">
    <div class="card-panel">
       <h5><i class="material-icons">person_pin</i> Imagen de Usuario <a href="updateProfile"><i class="white-text material-icons right tooltipped" data-position="right" data-delay="30" data-tooltip="Modificar tus datos personales">mode_edit</i></a></h5>
        <li class="divider"></li><br>
<?php
if (isset($_GET['foto'])){
?>
<center><h7 style='color: red'>su foto no cumple con los requerimientos.<h7></center>
<?
  }
?>
<center>Su foto tiene que ser "jpg", "jpeg" o "png" y debe pesar un maximo de 300kb. <br><br></center>
          <div class="row">
      <div class="col s5">
      <a href='data:image/jpg;base64,<?php echo base64_encode($imagen); ?>' data-lightbox='roadtrip'><img  class="mapa" width="120px" src="data:image/jpg;base64,<?php echo base64_encode($imagen); ?>"></a>
      </div>
         <div class="col s2"></div>
          <div class="file-field col s5">
          <input placeholder="Foto" class="file-path validate" required type="text" value="<?php echo $imagen1; ?>"/>
          <div class="btn" style="width:auto">
          <i class="mdi-file-file-upload"></i>
          <input type="file" name="imagen" required/>
          </div>
        </div>
        </div>
        </div>
 <div class="row">
    <button href="#<?php $resp=1; ?>" class="col s12 btn waves-effect waves-light" type="submit">Actualizar</button>
</div>
 </form>
</div>
</div>

<?php include('includes/footer.php'); ?>