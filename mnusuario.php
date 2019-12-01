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
$user = $_SESSION['u_user']; 
$encontrar=0;
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
if ($nivel==3){
?>
 <script type="text/javascript"> 
            window.location="usuario"; 
  </script> 
<?php
}
    $nivelU=$nivel+1;
}
if(isset($id)){
if(isset($_POST['contraseña'])){
$contraseñab = $_POST['contraseña'];
$nombreb = $_POST['nombre'];
$apellidob = $_POST['apellido'];
$rifb = $_POST['rif'];
$actb = $_POST['act'];
$cod_vendb = $_POST['cod_vend'];
$empresab = $_POST['empresa'];
$direccionb = $_POST['direccion'];
$telefonob = $_POST['telefono'];
$correob = $_POST['correo'];
$comentariob = $_POST['comentario'];
$zonab = $_POST['zona'];
  if ($nivel==1){
    $cod_vendg=$cod_vendb;
  }else{
    $cod_vendg=$cod_vend;
  }
$query = "UPDATE usuarios SET pw='$contraseñab', nombres='$nombreb', apellidos='$apellidob', empresa='$empresab', rif='$rifb', cod_vend='$cod_vendg', direccion='$direccionb', telefono='$telefonob', correo='$correob', comentario='$comentariob', activo='$actb', zona='$zonab' WHERE id = '$id'";
$resul = $conexion->query($query);
if ($resul){
?>
 <script type="text/javascript"> 
            window.location="usuarios"; 
  </script> 
<?php
  }
else{
  echo "no modificado";
  }
}
$dis="disabled";
$query = "SELECT * FROM usuarios WHERE id = '$id'";
$result = $conexion->query($query);
while ($row1 = $result->fetch_assoc()){
$nivel1 = $row1['nivel'];
$usuario1 = $row1['user'];
$contraseña1 = $row1['pw'];
$nombre1 = $row1['nombres'];
$apellido1 = $row1['apellidos'];
$empresa1 = $row1['empresa'];
$rif1 = $row1['rif'];
$cod_vend1 = $row1['cod_vend'];
$direccion1 = $row1['direccion'];
$telefono1 = $row1['telefono'];
$correo1 = $row1['correo'];
$comentario1 = $row1['comentario'];
$zona1 = $row1['zona'];
$imagen1demodificar = $row1['imagen'];
$act1 = $row1['activo'];
if ($act1==0){
  $b="selected";
  }else{
  $a="selected";
  }
}
}else{
  if(isset($_POST['usuario'])){
$encontrar=0;
$usuariob = $_POST['usuario'];
$contraseñab = $_POST['contraseña'];
$nombreb = $_POST['nombre'];
$apellidob = $_POST['apellido'];
$rifb = $_POST['rif'];
$actb = $_POST['act'];
$cod_vendb = $_POST['cod_vend'];
$empresab = $_POST['empresa'];
$direccionb = $_POST['direccion'];
$telefonob = $_POST['telefono'];
$correob = $_POST['correo'];
$comentariob = $_POST['comentario'];
$zonab = $_POST['zona'];
$query = "SELECT * FROM usuarios WHERE user = '$usuariob'";
$result = $conexion->query($query);
while ($row = $result->fetch_assoc()){
  $encontrar=1;
}
if ($encontrar==1){
  $resp="El nombre de usuario ya esta en uso";
  $usuario1=$usuariob;
  $contraseña1=$contraseñab;
  $nombre1=$nombreb;
  $apellido1=$apellidob;
  $rif1=$rifb;
  $cod_vend1= $cod_vendb;
  $empresa1=$empresab;
  $direccion1=$direccionb;
  $telefono1=$telefonob;
  $correo1=$correob;
  $comentario1=$comentariob;
  $zona1=$zonab;
  $act1=$actb;
}else{
  if ($nivel==1){
    $cod_vendg=$cod_vendb;
  }else{
    $cod_vendg=$cod_vend;
  }
  $query = "INSERT INTO usuarios (user, pw, nombres, apellidos, empresa, rif, nivel, cod_vend, direccion, telefono, correo, comentario, activo, zona) VALUES ('$usuariob', '$contraseñab', '$nombreb', '$apellidob', '$empresab', '$rifb', '$nivelU', '$cod_vendg', '$direccionb', '$telefonob', '$correob', '$comentariob', '$actb', '$zonab')";
$resul = $conexion->query($query);
if ($resul){
?>
 <script type="text/javascript"> 
            window.location="usuarios"; 
  </script> 
<?php
  }
else{
  echo "no se registro";
  }
}
}
}
?>
 <div class="row ">
<div class="col s1 right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Salir', 4000)" data-position="bottom" data-delay="100" data-tooltip="Salir" href="conex_sesioncerrar.php"><i class="material-icons">input</i></a></div>
<?
$arreglo=$_SESSION['carrito'];
$ncarrito=count($arreglo);
  ?>
 <div class="row ">
<div class="col right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Carrito', 4000)" data-position="bottom" data-delay="100" data-tooltip="Carrito" href="carritodecompras"><span style=' color: #212121; font-size:16px;'>(<?php echo $ncarrito; ?>)</span><i class="material-icons">shopping_cart</i></a></div>
<div class="col s1 right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Usuarios', 4000)" data-position="bottom" data-delay="100" data-tooltip="Usuarios" href="usuarios"><i class="material-icons">assignment_ind</i></a></div>
<div class="col  right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Perfil', 4000)" data-position="bottom" data-delay="100" data-tooltip="Perfil" href="usuario"><img src="data:image/jpg;base64,<?php echo base64_encode($imagen); ?>" width="19px"  class="circle responsive-img  dude-pic">&nbsp;<?php echo $nombres; ?></a>
</div>
</div>

 <div class="container">
 <div class="row">
    <?php if(isset($resp)){?>
        <center><h4><p style="font-size:18px"><?php echo $resp ?></p></h4></center>
    <?php }else{ echo '<br>'; } ?>
    <form class="col s12" method="post" enctype="multipart/form-data">
    <div class="card-panel">
        <h5><i class="material-icons">person_pin</i> Información Personal <a href="updateProfile"><i class="white-text material-icons right tooltipped" data-position="right" data-delay="30" data-tooltip="Modificar tus datos personales">mode_edit</i></a></h5>
        <li class="divider"></li><br>
          <div class="row">
            <div class="input-field col s6">
              <input <?php echo $dis; ?> required placeholder="Usuario" id="usuario" type="text" name="usuario" class="validate" value="<?php echo $usuario1; ?>" />
              <label for="usuario">Usuario</label>
            </div>
            <div class="input-field col s6">
              <input required placeholder="Contraseña" id="contraseña" type="text" name="contraseña" class="validate" value="<?php echo $contraseña1; ?>" />
              <label for="contraseña">Contraseña</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input required placeholder="Nombres" id="nombre" type="text" name="nombre" class="validate" value="<?php echo $nombre1; ?>" />
              <label for="nombre">Nombres</label>
            </div>
            <div class="input-field col s6">
              <input required placeholder="Apellidos" id="apellido" type="text" name="apellido" class="validate" value="<?php echo $apellido1; ?>" />
              <label for="apellido">Apellidos</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input required placeholder="Rif" id="rif" type="text" name="rif" class="validate" value="<?php echo $rif1; ?>" />
              <label for="rif">Rif</label>
            </div>
            <div class="input-field col s3">
             <label></label>
              <select id="act" name="act" class="browser-default" value="<?php echo $act1; ?>">
                <option value="1" <?php echo $a; ?>>Activo</option>
                <option value="0" <?php echo $b; ?>>Inactivo</option>
              </select>
              </div>
<?
 if ($nivel == 1){
?>
              <div class="input-field col s2">
              <input  required placeholder="Código" id="cod_vend" type="number" name="cod_vend" class="validate" value="<?php echo $cod_vend1; ?>" />
              <label for="cod_vend">Código Vendedor</label>
              </div>
<?
}
 if ($nivel == 2){
  ?>
          <div class="row">
            <div class="input-field col s12">
              <input required placeholder="Razón Social" id="empresa" type="text" name="empresa" class="validate" value="<?php echo $empresa1; ?>" />
              <label for="empresa">Razón Social</label>
            </div>
          </div>
<?
}
?>
          <div class="row">
            <div class="input-field col s12">
              <input required placeholder="Dirección" id="direccion" type="text" name="direccion" class="validate" value="<?php echo $direccion1; ?>" />
              <label for="direccion">Dirección</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s1">
            </div>
<?
 if ($nivel == 1){
?>
            <div class="input-field col s4">
              <input required placeholder="Zona" id="zona" type="text" name="zona" class="validate" value="<?php echo $zona1; ?>" />
              <label for="zona">Zona</label>
            </div>
<?
}
?>
        </div>

          <span><b><h5>Información de Contacto:</h5></b></span>
          <div class="row">
            <div class="input-field col s4">
              <input required placeholder="Teléfono" id="telefono" type="text" name="telefono" class="validate" value="<?php echo $telefono1; ?>" />
              <label for="telefono">Teléfono</label>
            </div>
            <div class="input-field col s8">
              <input required placeholder="Correo" id="correo" type="email" name="correo" class="validate" value="<?php echo $correo1; ?>" />
              <label for="correo">Correo</label>
            </div>

            <div class="input-field col s12">
              <input required placeholder="Comentario" id="comentario" type="text" name="comentario" class="validate" value="<?php echo $comentario1; ?>" />
              <label for="comentario">comentario</label>
            </div>
          </div>
        </div>
 <div class="row">
    <button href="#" class="col s12 btn waves-effect waves-light" type="submit">Actualizar</button>
</div>

 </form>
</div>
</div>

<?php include('includes/footer.php'); ?>