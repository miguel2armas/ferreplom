<?php 
include('includes/header.php');
?>
<div class="container center-align">
	<h3 class="green-text">Ingresar</h3>
		<form class="container" action="conex_sesion.php" method="post">
			<div class="row">
				<div class="input-field col s5">
					 <i class="material-icons prefix">account_circle</i>
				  <input id="first_name" type="text" class="validate" name="user" required />
				  <label for="first_name">Usuario</label>
				</div>
				<div class="input-field col s5">
					 <i class="material-icons prefix">vpn_key</i>
				  <input id="last_name" type="password" class="validate" name="pass" required />
				  <label for="last_name">Contraseña</label>
				</div>
			</div>
			<div class="row">
				<button class="btn waves-effect waves-light green" type="submit" name="action">Ingresar
					<i class="mdi-content-send right"></i>
				</button>
			</div>
		</form>
</div>

<?php include('includes/footer.php'); ?>