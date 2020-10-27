<?php

	$conexion = mysqli_connect ('Localhost','root','','worhou');


	$Nombre=$_POST['Nombre'];
	$Apellido=$_POST['Apellido'];
	$Id_doc=$_POST['Id_doc'];
	$Documento=$_POST['Documento'];
	$Telefono=$_POST['Telefono'];
	$Correo=$_POST['Correo'];
	$Contrasena=$_POST['Contrasena'];


$resultado = mysqli_query($conexion,"insert into registro VALUES (NULL , '$Nombre', '$Apellido', '$Id_doc', '$Documento','$Telefono','$Correo', '$Contrasena', '2')");

	if ($resultado) {
		header('Location: logeo.php');
	}
	else{

		echo "error";
	}
?>