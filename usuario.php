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
        header('Location: usuario.php');
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
            <li class="nav-item active">
              <a class="nav-link" href="#">
                <span class="sr-only"></span>
              </a>
            </li>
            <form action="consu1.php" method="POST" class="form-inline">
              <input name="trabajo" class="form-control mr-sm-2" required type="search" placeholder="Buscar en WorHou" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             </form>
                <li class="nav-item">
              <a href="cerrar.php"><button class="btn btn-outline-danger">Salir</button></a>
            </li>
          </ul>
        </div>
      </div>
    </nav><br><br>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h2 class="my-4">Principal</h2>
          <div class="list-group">
          <a  href="subir.php" type="button" class="btn btn-dark"  aria-pressed="false" autocomplete="off">Subir trabajos</a>
          </di><br>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9 "><br><br>



<div class="embed-responsive embed-responsive-16by9">
<iframe width="560" height="315" src="https://www.youtube.com/embed/XfhOdfwxOYI?rel=0&autoplay=1"  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
</div><br>
    <center><div class="grow">
    <button type="button" class="btn btn-outline-success my-2 my-sm-0">
    WorHou-le da poder a la gente.</button>
</div></center><br>

  <div class="row">
        
            <?php
$conexion = mysqli_connect('localhost', 'root', '', 'worhou');


$buscame = "SELECT * FROM trabajo";

$sql = $conexion -> query($buscame);

while ($row = $sql -> fetch_assoc()){

?>

  <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <div class="grow d-flex justify-content-center"><a href="trabajo.php?Id_tra=<?php echo $row['Id_tra'] ?>">  <?php echo '<img src="'.$row['imagen'].'" width="253px">' ?></a></div>
                <div class="card-body">
                  <h4 class="card-title">
                    <center><a href="trabajo.php?Id_tra=<?php echo $row['Id_tra'] ?>"><?php  echo $row['trabajo'];?></a></center>
                  </h4>
                  <p class="card-text"><?php  echo $row['descripcion'];?></p>
                  <p>---------------------------------</p>
                  <p class="card-text">publicado en:  <?php  echo $row['fecha'];?></p>
                  <p class="card-text">Publicado por: <?php  echo $row['correo'];?></p>
                </div>
              </div>
            </div>
<br>


<?php
}
?>
              </div>
            </div>

          

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
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
