<?php
session_start();
	$arreglo=$_SESSION['carrito'];
	for($i=0;$i<count($arreglo);$i++){
		if($arreglo[$i]['Img']!=$_POST['Img']){
			$datosNuevos[]=array(
				'Img'=>$arreglo[$i]['Img'],
				'Descrip'=>$arreglo[$i]['Descrip'],
				'Precio1'=>$arreglo[$i]['Precio1'],
				'Existen'=>$arreglo[$i]['Existen'],
				'Cantidad'=>$arreglo[$i]['Cantidad']
				);

		}
	}
	if(isset($datosNuevos)){
		for($i=0;$i<count($datosNuevos);$i++){
			$total=($datosNuevos[$i]['Precio1']*$datosNuevos[$i]['Cantidad'])+$total;
		}
		$_SESSION['carrito']=$datosNuevos;
		echo number_format($total, 2, ',', '.');
	}else{
		unset($_SESSION['carrito']);
		echo '0';
	}
?>