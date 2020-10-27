<?php

   $conexion = mysqli_connect ('Localhost','root','','worhou');
    $Id_tra = $_POST['Id_tra'];


  $_DELETE_SQL =   "DELETE FROM `trabajo` WHERE `trabajo`.`Id_tra` = $Id_tra";
  mysqli_query($conexion,$_DELETE_SQL); 



if ($_DELETE_SQL) {
       header('Location:Admin.php');
    }
    else {
        echo "error:no se pudo conectar";
    }


?>
