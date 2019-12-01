<?
	$server="localhost";
	$username="root";
	$password="12345678";
	$db='ferreplom';
$conexion = new mysqli($server,$username, $password, $db);
if ($conexion){
	}
else {
	echo "error en conexion";
	}
	$con=mysql_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	$sdb=mysql_select_db($db,$con)or die("la base de datos no existe");
?>