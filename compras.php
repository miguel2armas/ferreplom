<?php 
	session_start();
$arreglo=$_SESSION['carrito'];	
	$nventa=0;
include ("includes/conex_DB.php");
//usuario
$user = $_SESSION['u_user']; 
$query = "SELECT * FROM usuarios WHERE user = '$user'";
$result = $conexion->query($query);
while ($row = $result->fetch_assoc()){
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
		$imagen = $row['imagen'];

}
//usuario y luego vendedor
$query = "SELECT * FROM usuarios WHERE cod_vend = '$cod_vend'";
$result = $conexion->query($query);
while ($row1 = $result->fetch_assoc()){
	if ($row1['nivel']==2){
		$nombres1 = $row1['nombres'];
		$apellidos1 = $row1['apellidos'];
		$nivel1 = $row1['nivel'];
		$cod_vend1 = $row1['cod_vend'];
		$direccion1 = $row1['direccion'];
		$telefono1 = $row1['telefono'];
		$correo1 = $row1['correo'];
		$comentario1 = $row1['comentario'];
		$activo1 = $row1['activo'];
}
}
//vendedor
$query = "SELECT * FROM compras ORDER BY nventa DESC LIMIT 1";
$result = $conexion->query($query);
while ($row = $result->fetch_assoc()){
$nventa= $row['nventa'];
}
if ($nventa==0){
	$nventa=1;
}else{
	$nventa=$nventa+1;
}
for($i=0;$i<count($arreglo);$i++){
	$query = "INSERT INTO compras (nventa, fecha, cod_vend, cliente, codigo, descrip, cantidad, precio, subtotal) values (
	".$nventa.",
	NOW(),
	'".$cod_vend."',
	'".$_SESSION['u_user']."',
	'".$arreglo[$i]['Img']."',
	'".$arreglo[$i]['Descrip']."',
	'".$arreglo[$i]['Cantidad']."',
	'".$arreglo[$i]['Precio1']."',
	'".($arreglo[$i]['Precio1']*$arreglo[$i]['Cantidad'])."'
)";
$resul = $conexion->query($query);
}
	/*$total=0;
	$tabla='<table border="1">
		<tr>
		<th>Nombre</th>
		<th>Descripcion</th>
		<th>Cantidad</th>
		<th>Precio</th>
		<th>Subtotal</th>
		</tr>';
	for($i=0;$i<count($arreglo);$i++){
		$tabla=$tabla.'<tr>
			<td>'.$arreglo[$i]['Img'].'</td>
			<td>'.$arreglo[$i]['Descrip'].'</td>
			<td><p align="right">'.number_format($arreglo[$i]['Cantidad'], 2, ',', '.').'</p></td>
			<td><p align="right">'.number_format($arreglo[$i]['Precio1'], 2, ',', '.').'</p></td>
			<td><p align="right">'.number_format($arreglo[$i]['Cantidad']*$arreglo[$i]['Precio1'], 2, ',', '.').'</p></td>
			</tr>
		';
		$total=$total+($arreglo[$i]['Cantidad']*$arreglo[$i]['Precio1']);
	}
	$tabla=$tabla.'</table>';
//echo $tabla;

		$asuntou='FERREPLOM, C.A. (Pedido N°'.$nventa.')';
		$asuntov='Pedido N°'.$nventa.' de '.$empresa.' ';
		$comentariou='
			<div style="
				border:1px solid #d6d2d2;
				border-radius:5px;
				padding:10px;
				width:800px;
				heigth:300px;
			">
			<center>
				<h1>Muchas gracias por comprar en Ferreplom, c.a. Su mayor de Confianza!</h1>
			</center>
			<p>Buen dia, Sres '.$empresa.' muchas gracias por su pedido N°'.$nventa.' el cual lleva los siguientes productos</p>
			<p>Lista de Artículos<br>
				'.$tabla.'
				<br>
				Su total del pago neto (sin cargos o descuentos) es: '.number_format($total, 2, ',', '.').'
				<br><br>Recuerde que estamos trabajando para que su pedido sea chequeado, armado y facturado, respetando las cantidades minimas de solicitud.
				<br> tambien es nuestro deber recordarles que debido a la gran cantidad de pedidos diarios que recibimos no garantizamos la facturacion de los productos y cantidades solicutadas.
			</p>
			</div>

		';
		$comentariov='
			<div style="
				border:1px solid #d6d2d2;
				border-radius:5px;
				padding:10px;
				width:800px;
				heigth:300px;
			">
			<center>
				<h1>Solicitud de Pedido</h1>
			</center>
			<p>pedido de '.$empresa.'  N°'.$nventa.' el cual lleva los siguientes productos</p>
			<p>Lista de Artículos<br>
				'.$tabla.'
				<br>
				EL Total es: '.number_format($total, 2, ',', '.').'
				<br>datos del cliente<br>
				<br>Rif: '.$rif.'<br>
				<br>Telefono: '.$telefono.'<br>
				<br>Correo: '.$correo.'<br>
				<br>Direccion: '.$direccion.'<br>
				<br>comentarios en los datos del cliente: '.$comentario.'<br>
			</p>
			</div>

		';

		//echo $comentario;
		$headers='MIME-Version: 1.0' . "\r\n";
		$headers.='Content-type: text/html; charset=iso-8859-1' . "\r\n";
		mail($correo,$asuntou,$comentariou,$headers);
		mail($correo1,$asuntov,$comentariov,$headers);


$mail = "Prueba de mensaje";
//Titulo
$titulo = "PRUEBA DE TITULO";
//cabecera
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$headers .= "From: Geeky Theory < miguelasd2@gmail.com >\r\n";
//Enviamos el mensaje a tu_dirección_email 
$bool = mail("miguel2.a13@gmail.com",$titulo,$mail,$headers);
if($bool){
    echo "Mensaje enviado";
}else{
    echo "Mensaje no enviado";
}*/	


if ($resul){
	unset($_SESSION['carrito']);
 header ("location: admin.php");
  }
else{
  echo "no se registro";
  }
?>
