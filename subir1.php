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

    <link href="vendor/bootstrap/css/estilos.css" rel="stylesheet">
        <link href="vendor/bootstrap/css/estilos1.css" rel="stylesheet">
        <link rel="stylesheet" href="crear1.css">



    <?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header('Location: subir1.php');
    }
?>

  </head>

  <body background="imagenes/23.jpg">

    <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <span id="logo"><a href="Admin.php"><img id="logo" href="Admin.php" src="imagenes/logo.ico" width="50" height="50" ></a></span>
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
                <li class="nav-item">
              <a href="cerrar.php"><button class="btn btn-outline-danger">Salir</button></a>
            </li>
          </ul>
        </div>
      </div>
    </nav><br><br><br><br><br>


      <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-t-20 p-b-40">
        <form id="form3" action="cargar2.php" method="POST" enctype="multipart/form-data">
          <center><span >
            Subir trabajo
          </span></center><br><br>
          <span class="login100-form-avatar">
            <center><img src="imagenes/trabajo.png" alt="AVATAR"></center>
          </span><br><br>
          <input  name="trabajo" required placeholder= "Nombre de trabajo" required>
  <br><br><br>
            <textarea type="text" name="descripcion" required placeholder="Descripcion"></textarea>
  <br><br><br>
  <span>Subir imagen del trabajo</span>
    <input class="input" type="file" name="imagen" required="required">
  <br><br><br>
  <span>Subir trabajo formato pdf</span>
  <input class="input" type="file" name="pdf" required="required">
  <br><br><br>
  <input type="date" name="fecha" required>
  <br><br>
  <input type="email" name="correo" required placeholder="Correo"><br><br>
            <button style="background: #5BEEFC;
    color: #fff;
    padding:10px;
    cursor: pointer; 
    width: 400px;
    border-color:#0000ff ;
    border-radius:20px;">Subir trabajo</button>
        </form><br><br><br><br><br><br><br><br>
      </div>
    </div>
  </div>

   

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