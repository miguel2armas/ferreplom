<?

session_start();

$user=$_POST['user'];
$pw=$_POST['pass'];

include("includes/conex_DB.php");
$query = "SELECT * FROM usuarios WHERE user LIKE '%$user%' ORDER BY user";
$result = $conexion->query($query);
while ($row = $result->fetch_assoc()){
		$activo = $row['activo'];
}

$proceso = $conexion->query("SELECT * FROM usuarios WHERE user='$user' AND pw='$pw'");

if ($resul = mysqli_fetch_array($proceso)){
if ($activo==1){
$query = "SELECT * FROM usuarios WHERE user = '$user'";
$result = $conexion->query($query);
while ($row = $result->fetch_assoc()){
		$user1 = $row['user'];
}
	$_SESSION['u_user'] = $user1;
	header ("location: productos");
}else{
	header ("location: product.php?acce=deneg");
}

}
else{
	header ("location: product.php?acceso=deneg");
}
?>