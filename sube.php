<?php  

if (isset($_POST['submit'])) {   
    if(is_uploaded_file($_FILES['fichero']['tmp_name'])) { 
     
     
      // me verifica haya sido cargado el archivo
    	$nombre_archivo  = $_POST["nombre_archivo"];
        $ruta_destino = "img/p/"; 
        $namefinal= trim ($nombre_archivo); 
        $namefinal= ereg_replace (" ", "", $namefinal);
        $uploadfile= $ruta_destino . $namefinal . ".jpg";  



        if(move_uploaded_file($_FILES['fichero']['tmp_name'], $uploadfile)) { // se coloca en su lugar final  

header("Location: fotosub.php");
                      
        }  
    }  
 } 

?> 