<?php


$conexion = mysqli_connect('localhost', 'root', '', 'worhou');



    $trabajo = $_POST['trabajo'];
    $descripcion = $_POST['descripcion'];
    $fecha = $_POST['fecha'];
    $correo = $_POST['correo'];


    $nombre_pdf = $_FILES['pdf']['name'];
    $ruta_pdf = $_FILES['pdf']['tmp_name'];
    $destino = "PDF/".$nombre_pdf;
    copy($ruta_pdf, $destino);



    $nombreimg = $_FILES['imagen']['name'];
    $archivos = $_FILES['imagen']['tmp_name'];
    $ruta = "portada";
    $ruta=$ruta."/".$nombreimg;
    move_uploaded_file($archivos, $ruta);


    $insertar = "INSERT INTO trabajo VALUES ( NULL , '$trabajo', '$descripcion', '".$destino."', '".$ruta."', '$fecha' ,'$correo' )";

    $sql = $conexion -> query($insertar);
         if ($sql) {
             	             header('Location: Admin.php');
             }     else {
             	              header('Location: subir.php');
             }

?>