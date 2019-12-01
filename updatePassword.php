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
if(isset($_POST['pass'])){
if ($pw != $_POST['pass'] ){
  $resp = "Contraseña Incorrecta";
}else if( $_POST['newpass'] != $_POST['repeticion'] ){
  $resp = "Las contraseñas no coinciden.";
}else{
  $nuevo = $_POST['newpass'];
  $query = "UPDATE usuarios SET pw='$nuevo' WHERE user = '$user'";
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
}

}
 // $resp='';
 //   if( $user['pass'] != $_POST['pass'] ){
 //     $resp .= 'Contraseña incorrecta.' . PHP_EOL;
 //   }else if( $_POST['newpass'] != $_POST['repeticion'] ){
 //     $resp .= 'Las nuevas contraseñas no coinciden.' . PHP_EOL;
 //   }else{
 //     $nuevo = $user;
 //     $nuevo['pass'] = $_POST['newpass'];
//
 //     if(empty($resp)){
 //         header("Location: Perfil.php");
 //         die;
 //     }
 //   }
?>
 <div class="row ">
<div class="col s1 right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Salir', 4000)" data-position="bottom" data-delay="100" data-tooltip="Salir" href="conex_sesioncerrar.php"><i class="material-icons">input</i></a></div>
<div class="col right"><a class="tooltipped waves-effect waves-light btn col" onclick="Materialize.toast('Carrito', 4000)" data-position="bottom" data-delay="100" data-tooltip="Carrito" href="carritodecompras"><span style=' color: #212121; font-size:16px;'>(<?php echo $ncarrito; ?>)</span><i class="material-icons">shopping_cart</i></a></div>
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
</div>
<?
}
?>
</div>
  <div class="container">
   <div class="row">
      <?php if(isset($resp)){?>
          <h5><p class="center"><?php echo $resp ?></p></h5>
      <?php }else{ echo '<br>'; }?>
      <form class="col s12" method="post">
        <input type="hidden" name="edit" value="Chupame el pito." />
        <div class="card-panel">
          <h5><i class="material-icons">person_pin</i> Editar contraseña</h5>
          <li class="divider"></li><br>
          <div class="row">
            <div class="input-field col s12">
              <input required id="pass" type="password" name="pass" class="validate" />
              <label for="pass">Tu contraseña actual</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input required id="newpass" type="password" name="newpass" class="validate" />
              <label for="newpass">Tu nueva contraseña</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input required id="repeticion" type="password" name="repeticion" class="validate" />
              <label for="repeticion">Tu nueva contraseña de vuelta</label>
            </div>
          </div>
        </div>
        <div class="row">
          <button href="#" class="col s12 btn waves-effect waves-light " type="submit">Actualizar</button>
        </div>
      </form>
    </div>
  </div>

<?php include('includes/footer.php'); ?>