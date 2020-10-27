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

     <?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header('Location: consu1.php');
    }

?>

  </head>

  <body>

     <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <span id="logo"><a href="usuario.php"><img id="logo" src="imagenes/logo.ico" width="50" height="50" ></a></span>&nbsp;&nbsp;&nbsp;
        <a class="navbar-brand" href="usuario.php"><?=$_SESSION['usuario']['Nombre']?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <form action="consu1.php" method="POST" class="form-inline">
              <input name="trabajo" required class="form-control mr-sm-2" type="search" placeholder="Buscar en WorHou" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             </form>
          </ul>
        </div>
      </div>
    </nav><br><br>
    

    <?php

  $conexion = mysqli_connect ('Localhost','root','','worhou');

  $trabajo=$_POST['trabajo'];


  $resultado=mysqli_query($conexion,"SELECT * FROM trabajo WHERE trabajo='$trabajo' ");
       

    echo"<br>
            <table width=\"100%\" style=\"background-color: white; border-collapse: collapse;\">
            <thead style=\"background-color: #10B430; border-bottom: solid 5px #2D382E; color: white;\">
              <tr>
              <td style=\"padding: 20px\";>Identificacion del Trabajo</td>
                <td style=\"padding: 20px\";>Trabajo</td>
                <td style=\"padding: 20px\";>Link</td>
              </tr>";
          while($consulta=mysqli_fetch_array($resultado))
          {
            $id=$consulta['Id_tra'];
              echo"<thead>
              <tr>
              <td style=\"padding: 20px\";>".$consulta['Id_tra']."</td>
                <td style=\"padding: 20px\";>".$consulta['trabajo']."</td>
                <td style=\"padding: 20px\";>".$consulta['trabajo']."</td>
              </tr>";
          }
      echo"</table><br>";

  ?>
<?php
$conexion = mysqli_connect('localhost', 'root', '', 'worhou');


  $resultado=mysqli_query($conexion,"SELECT * FROM trabajo WHERE trabajo='$trabajo' ");

  

   while($consulta=mysqli_fetch_array($resultado))
          {
              

          }




$sql = "SELECT * FROM trabajo WHERE Id_tra='$id'";

$mysql = $conexion -> query($sql);

while($row = $mysql-> fetch_assoc()){
?>

  <center><a class="btn btn-outline-warning ol "  role="button" href="verpdf.php?Id_tra=<?php echo $row ['Id_tra']?>"  target="_blank">Descargar</a></center></div>
  <?php
}
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
