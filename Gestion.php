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

    <link rel="stylesheet" href="estilos1.css">


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
            <li class="nav-item">
             <a href="cerrar.php"><button class="btn btn-outline-danger">Salir</button></a>
           </li>
          </ul>
        </div>
      </div>
    </nav><br><br><br><br>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Gestion de trabajos</h1>
          <div class="list-group">
          <a href="Admin.php" type="button" class="btn btn-dark"  aria-pressed="false">Trabajos</a><br>
          <a href="Gesusuarios.php" type="button" class="btn btn-dark"  aria-pressed="false">Gestion de usuarios</a><br>
          <a href="subir1.php" type="button" class="btn btn-dark"  aria-pressed="false">Subir trabajo </a><br>
          </div>
        

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

         <center><img src="imagenes/24.jpg" width="300" height="300"></center>
          
        <center><div class="grow">
          <button type="button" class="btn btn-outline-success my-2 my-sm-0">
          WorHou-LE DA PODER A LA GENTE.</button>
        </div></center><br>


          <div class="row">

            
          <form  action="eliminar.php" method="POST">
          <center><span >
            Eliminar trabajo
          </span></center><br><br>
          <input  name="Id_tra"  placeholder= "Identificacion del trabajo" required >  
          <br><br><br>
          <button style="background: #5BEEFC; color: #fff; padding:10px; cursor: pointer; width: 400px; border-color:#0000ff; border-radius:20px;">Eliminar</button>
          </form><br><br>


          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div><br><br><br><br><br><br>
    <!-- /.container -->

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
