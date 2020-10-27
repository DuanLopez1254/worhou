<?php

	$conexion = mysqli_connect ('Localhost','root','','worhou');


	$Nombre=$_POST['Nombre'];
	$Correo=$_POST['Correo'];
	$Descripcion=$_POST['Descripcion'];


$resultado = mysqli_query($conexion,"insert into ayuda VALUES ('NULL' , '$Nombre', '$Correo', '$Descripcion')");

	if ($resultado) {
		header('Location: Ayuda.php');
	}
	else{

		echo "error";
	}
?>
