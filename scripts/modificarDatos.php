<?php
	if ($_POST)
	$Img = $_POST['Img'];
	$Cantidad = $_POST['Cantidad'];
session_start();
		$arreglo=$_SESSION['carrito'];
		$total=0;
		$numero=0;
		for($i=0;$i<count($arreglo);$i++){
			if($arreglo[$i][Img]==$Img){
				$numero=$i;
			}
		}
		$arreglo[$numero]['Cantidad']=$Cantidad;
		for($i=0;$i<count($arreglo);$i++){
			$total=($arreglo[$i]['Precio1']*$arreglo[$i]['Cantidad'])+$total;
		}
		$_SESSION['carrito']=$arreglo;
		echo number_format($total, 2, ',', '.');
?>