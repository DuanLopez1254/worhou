<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  

    <title>Worhou</title>
    <link rel="icon" href="imagenes/logo.ico" >

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

  	 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <span id="logo"><a href="Admin.php"><img id="logo" src="imagenes/logo.ico" width="50" height="50" ></a></span>&nbsp;&nbsp;&nbsp;
        <a class="navbar-brand" href="Admin.php">WorHou</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        </div>
      </div>
    </nav><br><br><br><br>
  	

  <?php
        $conexion  = mysqli_connect('localhost', 'root' , '' ,'worhou');

        $resu=mysqli_query($conexion,"SELECT * FROM registro");
        echo"<table width=\"100%\" style=\"background-color: white; border-collapse: collapse;\">
            <thead style=\"background-color: #10B430; border-bottom: solid 5px #2D382E; color: white;\">
        <tr>
              <td style=\"padding: 20px\";>Id Registro</td>
              <td style=\"padding: 20px\";>Nombre</td>
              <td style=\"padding: 20px\";>Apellido</td>
              <td style=\"padding: 20px\";>Tipo de documento</td>
              <td style=\"padding: 20px\";>Numero de documento</td>
              <td style=\"padding: 20px\";>Teléfono</td>
              <td style=\"padding: 20px\";>Correo</td>
              <td style=\"padding: 20px\";>Contraseña</td>
              <td style=\"padding: 20px\";>Id cargo</td>
            </tr>";
        while($consulta=mysqli_fetch_array($resu))
        {
          echo"<thead>
          <tr>
              <td style=\"padding: 20px\";>".$consulta['Id_registro']."</td>
              <td style=\"padding: 20px\";>".$consulta['Nombre']."</td>
              <td style=\"padding: 20px\";>".$consulta['Apellido']."</td>
              <td style=\"padding: 20px\";>".$consulta['Id_doc']."</td>
              <td style=\"padding: 20px\";>".$consulta['Documento']."</td>
              <td style=\"padding: 20px\";>".$consulta['Telefono']."</td>
              <td style=\"padding: 20px\";>".$consulta['Correo']."</td>
              <td style=\"padding: 20px\";>".$consulta['Contrasena']."</td>
              <td style=\"padding: 20px\";>".$consulta['Id_cargo']."</td>
            </tr>";
        }
        echo"</table>";
      ?><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
