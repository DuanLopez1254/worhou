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

        <link rel="stylesheet" href="crear1.css">





  </head>

  <body background="imagenes/22.jpg">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <span id="logo"><a href="index.php"><img id="logo" src="imagenes/logo.ico" width="50" height="50" ></a></span>&nbsp;&nbsp;&nbsp;
        <a class="navbar-brand" href="index.php">WorHou</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
           <li class="nav-item">
             <a href="logeo.php"><button type="button" class="btn btn-outline-light">Iniciar sesión</button>&nbsp;&nbsp;&nbsp;
           </li></a>
          </ul>
        </div>
      </div>
    </nav><BR><BR><BR><BR>


      <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-t-20 p-b-40">
        <form id="form3" action="principal.php" method="POST">
          <center><span >
            Bienvenido
          </span></center><br><br>
          <span class="login100-form-avatar">
            <center><img src="imagenes/avatar.png" alt="AVATAR"></center>
          </span><br><br>
          <input class="text" name="Nombre" required placeholder= "Nombre" size="40">  
  <br><br><br>
            <input type="text" name="Apellido" required placeholder= "Apellido" size="40">
  <br><br><br>
            <select name="Id_doc">
                <option value="0">Tipo de cocumento</option> 
                <option value="1">Tarjeta de identidad</option> 
                <option value="2">Cedula Ciudadania</option>
                <option value="3">Cedula Extranjera</option>
              </select>
  <br><br><br>
            <input class="" name="Documento" required placeholder= "No documento">
  <br><br><br>
            <input class="" name="Telefono" required placeholder= "Telefono">
  <br><br><br>
            <input type="email" name="Correo" required placeholder="Correo electronico">
  <br><br><br>
            <input type="password" name="Contrasena" required placeholder="Contraseña">
  <br><br><br>
            <button style="background: #5BEEFC;
    color: #fff;
    padding:10px;
    cursor: pointer; 
    width: 400px;
    border-color:#0000ff ;
    border-radius:20px;">Regístrate</button>
        </form><br><br>
      </div>
    </div>
  </div>

   

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