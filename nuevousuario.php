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
if(isset($_POST['nombre'])){
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $rif = $_POST['rif'];
  $empresa = $_POST['empresa'];
  $direccion = $_POST['direccion'];
  $telefono = $_POST['telefono'];
  $email = $_POST['correo'];
if ($nivel == 3){
  $query = "UPDATE usuarios SET nombres='$nombre', apellidos='$apellido', empresa='$empresa', rif='$rif',   direccion='$direccion', telefono='$telefono', correo='$email' WHERE user = '$user'";
$resul = $conexion->query($query);
if ($resul){
  header("Location: usuario.php");
    } 
else{
    echo "no modificado";
  }
}else{
  $query = "UPDATE usuarios SET nombres='$nombre', apellidos='$apellido', rif='$rif', direccion='$direccion', telefono='$telefono', correo='$email' WHERE user = '$user'";
$resul = $conexion->query($query);
if ($resul){
  header("Location: usuario.php");
    } 
else{
    echo "no modificado";
  }
}
}

?>

 <div class="row ">
<div class="col s1 right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Salir', 4000)" data-position="bottom" data-delay="100" data-tooltip="Salir" href="conex_sesioncerrar.php"><i class="material-icons">input</i></a></div>
<div class="col s1 right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Carrito', 4000)" data-position="bottom" data-delay="100" data-tooltip="Carrito" href="carritodecompras.php"><i class="material-icons">shopping_cart</i></a></div>
<div class="col  right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Perfil', 4000)" data-position="bottom" data-delay="100" data-tooltip="Perfil" href="usuario.php"><?php echo $_SESSION['u_user']; ?></a>
</div></div>

 <div class="container">
 <div class="row">
    <?php if(isset($resp)){?>
        <p><?php echo $resp ?></p>
    <?php }else{ echo '<br>'; } ?>
    <form class="col s12" method="post">
    <div class="card-panel">
        <h5><i class="material-icons">person_pin</i> Información Personal <a href="updateProfile.php"><i class="white-text material-icons right tooltipped" data-position="right" data-delay="30" data-tooltip="Modificar tus datos personales">mode_edit</i></a></h5>
        <li class="divider"></li><br>
          <div class="row">
            <div class="input-field col s6">
              <input required placeholder="Usuario" id="usuario" type="text" name="usuario" class="validate" value="" />
              <label for="usuario">Usuario</label>
            </div>
            <div class="input-field col s6">
              <input required placeholder="Contraseña" id="contraseña" type="text" name="contraseña" class="validate" value="" />
              <label for="contraseña">Contraseña</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input required placeholder="Nombres" id="nombre" type="text" name="nombre" class="validate" value="" />
              <label for="nombre">Nombres</label>
            </div>
            <div class="input-field col s6">
              <input required placeholder="Apellidos" id="apellido" type="text" name="apellido" class="validate" value="" />
              <label for="apellido">Apellidos</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input required placeholder="Rif" id="rif" type="text" name="rif" class="validate" value="" />
              <label for="rif">Rif</label>
            </div>
            <div class="input-field col s3">
             <label></label>
              <select class="browser-default">
                <option value="1">Activo</option>
                <option value="2">Inactivo</option>
              </select>
              </div>
<?
 if ($nivel == 1){
?>
              <div class="input-field col s2">
              <input required placeholder="Código" id="rif" type="number" name="rif" class="validate" value="" />
              <label for="rif">Código Vendedor</label>
              </div>
<?
}
 if ($nivel == 2){
  ?>
          <div class="row">
            <div class="input-field col s12">
              <input required placeholder="Razón Social" id="empresa" type="text" name="empresa" class="validate" value="" />
              <label for="empresa">Razón Social</label>
            </div>
          </div>
<?
}
?>
          <div class="row">
            <div class="input-field col s12">
              <input required placeholder="Dirección" id="direccion" type="text" name="direccion" class="validate" value="" />
              <label for="direccion">Dirección</label>
            </div>
          </div>
          <span><b><h5>Informacion de Contacto:</h5></b></span>
          <div class="row">
            <div class="input-field col s4">
              <input required placeholder="Teléfono" id="telefono" type="text" name="telefono" class="validate" value="" />
              <label for="telefono">Teléfono</label>
            </div>
            <div class="input-field col s8">
              <input required placeholder="Correo" id="correo" type="email" name="correo" class="validate" value="" />
              <label for="correo">Correo</label>
            </div>

            <div class="input-field col s12">
              <input required placeholder="Comentario" id="comentario" type="text" name="comentario" class="validate" value="" />
              <label for="comentario">Comentario</label>
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