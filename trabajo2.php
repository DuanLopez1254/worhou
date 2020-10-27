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
    <link href="vendor/bootstrap/css/estilos.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
     <?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header('Location: Admin.php');
    }

?>
  
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <span id="logo"><a href="Admin.php"><img id="logo" src="imagenes/logo.ico" width="50" height="50" ></a></span>&nbsp;&nbsp;&nbsp;
        <a class="navbar-brand" href="Admin.php"><?=$_SESSION['usuario']['Nombre']?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">
                <span class="sr-only"></span>
              </a>
            </li>
            <form class="form-inline">
              <input class="form-control mr-sm-2" type="search" placeholder="Buscar en WorHou" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             </form>
                <li class="nav-item">
              <a href="cerrar.php"><button class="btn btn-outline-danger">Salir</button></a>
            </li>
          </ul>
        </div>
      </div>
    </nav><br><br>

    <!-- Page Content -->

        <!-- /.col-lg-3 -->
    <div class="targeta"><center>
      
<?php
$conexion = mysqli_connect('localhost', 'root', '', 'worhou');

$id = $_REQUEST['Id_tra'];

$sql = "SELECT * FROM trabajo WHERE Id_tra='$id'";

$mysql = $conexion -> query($sql);

while($row = $mysql-> fetch_assoc()){
?>
  <div class=" d-flex justify-content-center"><?php echo '<img src="'.$row['imagen'].'" width="40%">' ?></div>
  <br>
<div>
<h2><?php  echo $row['trabajo'];?></h2>
<br>
<h3>Descripcion:<?php  echo $row['descripcion'];?> </h3>

<br>
<h4>Publicado en :
<?php  echo $row['fecha'];?></h4>
<br>
<h4>Publicado po :
<?php  echo $row['correo'];?></h4>
<br>
<style>
.ol{
  border-radius: 10%;
}
</style>
<a class="btn btn-outline-warning ol "  role="button" href="verpdf.php?Id_tra=<?php echo $row ['Id_tra']?>"  target="_blank">Descargar</a></div>
<?php
}
?>
<!--nose
  <?php echo $row['pdf_d'];?>-->
    </div></center>
          

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div><br><br><br>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
