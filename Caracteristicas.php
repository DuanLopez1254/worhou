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
          <ul class="navbar-nav ml-auto">
            <form action="consu.php" method="POST" class="form-inline">
              <input name="trabajo" required class="form-control mr-sm-2" type="search" placeholder="Buscar en WorHou" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             </form>
          </ul>
        </div>
      </div>
    </nav><br><br><br><br>
  	

 <?php
       $conexion  = mysqli_connect('localhost', 'root' , '' ,'worhou');

       $resu=mysqli_query($conexion,"SELECT * FROM trabajo");
       echo"<table width=\"100%\" style=\"background-color: white; border-collapse: collapse;\">
           <thead style=\"background-color: #10B430; border-bottom: solid 5px #2D382E; color: white;\">
       <tr>
             <td style=\"padding: 20px\";>Id trabajo</td>
             <td style=\"padding: 20px\";>Nombre Trabajo</td>
             <td style=\"padding: 20px\";>Descripcion</td>
             <td style=\"padding: 20px\";>Fecha</td>
             <td style=\"padding: 20px\";>Correo</td>
           </tr>";
       while($consulta=mysqli_fetch_array($resu))
       {
         echo"<thead>
         <tr>
             <td style=\"padding: 20px\";>".$consulta['Id_tra']."</td>
             <td style=\"padding: 20px\";>".$consulta['trabajo']."</td>
             <td style=\"padding: 20px\";>".$consulta['descripcion']."</td>
             <td style=\"padding: 20px\";>".$consulta['fecha']."</td>
             <td style=\"padding: 20px\";>".$consulta['correo']."</td>
           </tr>";
       }
       echo"</table>";
     ?>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


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