<?php

   $conexion  = mysqli_connect('localhost', 'root' , '' ,'worhou');
   $Correo=$_POST['Correo'];
   $Contrasena=$_POST['Contrasena'];



   $resultado = mysqli_query($conexion,"Select * from registro where Correo = '$Correo' and Contrasena = '$Contrasena'");

   if ($resultado) {
       header('Location:logeo.php');
   }
   else {
       echo "error:no se pudo conectar";
   }
   
   if($row =  $resultado->fetch_assoc()) {
       
           session_start();
           $_SESSION['usuario'] = $row;
           if($row['Id_cargo'] == 1){
               header('Location:Admin.php');
           }else if($row['Id_cargo'] == 2) {
               header('Location: usuario.php');
           }
   }
?>
 