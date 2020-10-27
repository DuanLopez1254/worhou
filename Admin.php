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
        <span id="logo"><a href="#"><img id="logo" src="imagenes/logo.ico" width="50" height="50" ></a></span>&nbsp;&nbsp;&nbsp;
        <a class="navbar-brand" href="#"><?=$_SESSION['usuario']['Nombre']?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">
                <span class="sr-only"></span>
              </a>
            </li>
            <form action="consu2.php" method="POST" class="form-inline">
              <input name="trabajo" required class="form-control mr-sm-2" type="search" placeholder="Buscar en WorHou" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             </form>
              </li>
               <li class="nav-item">
             <a href="cerrar.php"><button class="btn btn-outline-danger">Salir</button></a>
           </li>
          </ul>
        </div>
      </div>
    </nav><br><br>

    <style type="text/css">
      
      * {
        margin:0px;
        padding:0px;
      }
      
      #header {
        margin:auto;
        width:500px;
        font-family:Arial, Helvetica, sans-serif;
      }
      
      ul, ol {
        list-style:none;
      }
      
      .nav > li {
        float:left;
      }
      
      .nav li a {
        background-color:  #333;
        color:#fff;
        text-decoration:none;
        padding:6px ;
        display:block;
        width: 255px;
      }
      
      .nav li a:hover {
        background-color:#434343;
      }
      
      .nav li ul {
        display:none;
        position:absolute;
        min-width:140px;
      }
      
      .nav li:hover > ul {
        display:block;
      }
      
      .nav li ul li {
        position:relative;
      }
      
      .nav li ul li ul {
        right:-140px;
        top:0px;
      }
      
    </style>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h2 class="my-4">Trabajos</h2>
          <div class="list-group">
          <div id="header">
      <ul  class="nav">
        <li><a type="button" class="btn btn-dark" href="">Gestion de trabajos</a>
          <ul>
            <li><a href="Caracteristicas.php">Caracteristicas</a></li>
            <li><a href="Gestion.php">Eliminar</a></li>
          </ul>
        </li>
      </ul>
    </div><br>
          <a href="Gesusuarios.php" type="button" class="btn btn-dark"  aria-pressed="false">Gestion de usuarios</a><br>
          <a href="subir1.php" type="button" class="btn btn-dark"  aria-pressed="false">Subir trabajo </a><br>
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
                <div class="grow d-flex justify-content-center"><a href="trabajo1.php?Id_tra=<?php echo $row['Id_tra'] ?>">  <?php echo '<img src="'.$row['imagen'].'" width="253px">' ?></a></div>
                <div class="card-body">
                  <h4 class="card-title">
                    <center><a href="trabajo1.php?Id_tra=<?php echo $row['Id_tra'] ?>"><?php  echo $row['trabajo'];?></a></center>
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
