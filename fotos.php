<?php 
session_start();
	if (isset($_SESSION['u_user'])){
	}
	else{
	header ("location: login.php");
	}

include('includes/header.php');
?>
<form class="col s2 right" action="conex_sesioncerrar.php" method="post">
<input class="btn waves-light green" name="submit" type="submit" value="salir">
</form>
<div class="container">
<br>
	<h5 class="center green-text">Subir Imagen de Producto</h5>
	<div class="row center" >
	  <form class="col s12 " action="sube.php" method="post" enctype="multipart/form-data">
		<div class="row">
		  <div class="input-field col s12">
			<input id="input_text" type="text" name="nombre_archivo">
			<label for="input_text">Codigo</label>
		  </div>
		</div>
		<div class="row">
			<div class="col m12 l6">
				<div class="file-field">
				  <input name="fichero" placeholder="Seleccionar foto" class="file-path validate" required type="text" size="150" maxlength="150"/>
				  <div class="btn green" style="width:auto">
					<i class="mdi-file-file-upload"></i>
					<input type="file" name="fichero" />
				  </div>
				</div>
			</div>
		</div>
		<div class="row center">
		  <input class="btn waves-light green" name="submit" type="submit" value="Subir">  
		</div>
	  </form>
	</div>
</div>

<?php include('includes/footer.php'); ?>