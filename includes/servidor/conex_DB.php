<?
	$server="ferreplom.com.ve";
	$username="ferreplo_crear";
	$password="19668386as";
	$db='ferreplo_ferreplom';
$conexion = new mysqli($server,$username, $password, $db);
if ($conexion){
	}
else {
	echo "error en conexion";
	}
	$con=mysql_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	$sdb=mysql_select_db($db,$con)or die("la base de datos no existe");
?>