<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web de empleados</title>
    <link rel="stylesheet" href="../css/index.css"><!-- Archivos  CSS -->
    <!-- Bootstrap -->
    <link rel=" stylesheet " href="../css/bootstrap.min.css ">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</head>
<body class="fondo">
<!-- Barra de navegacion -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid"> 
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active text-white " href="index.php"> ✷ Inicio</a>
            </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Usuario
               </a>
               <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                 <li><a class="dropdown-item" href="#">Iniciar Sesion</a></li>
               </ul>
          </li>
            </ul>
          </div>
        </div>
      </nav>


    <header>
        <div><h1><center>Bienvenido al sitio web de la empresa ... </center></h1></div>
     
    </header>

     <!-- Iniciar sesion y registro -->
      <div class="log-popup">
          <h2>Iniciar Sesion</h2>
          <div class="log-content">
              <form action="login.php" method="post"><!--crear archicovo en php login-->
                  <i class="fa fa-user icon"></i>
                  <input type="text" placeholder="Ingrese su usuario" name="usuario" class="log-input" required>
                  <br>
                  <i class="fa fa-lock icon"></i>
                  <input type="password" placeholder="Ingrese su contraseña" name="contrasenna" class="log-input" required>
                  <br>
                  <input type="submit" value="Iniciar sesion" name="signup-btn" class="btn-log">
              </form>
          </div>
      </div>
  </div>
<br><br><br>
    <div class="about-box ">
            <div class="about ">
                <h4>Sobre este sitio</h4>
                <p class="about-content "> </p>
            </div>
    </div>

    <div class="footer"> 
        <center> <p>&copy; Copyright Mica Romano </p></center>
    </div>
    


</body>

</html>
