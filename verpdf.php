<?php


$conexion = mysqli_connect('localhost', 'root', '', 'worhou');

$id = $_REQUEST['Id_tra'];

$sql = "SELECT * FROM trabajo WHERE Id_tra='$id'";

$mysql = $conexion -> query($sql);

$datos = $mysql-> fetch_assoc();


header('content-type: application/pdf');
readfile($datos['pdf_d']);

?>