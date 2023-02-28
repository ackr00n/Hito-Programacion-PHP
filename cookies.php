<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hito Programacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    
  <nav class="navbar bg-dark" data-bs-theme="dark">
  <!-- Navbar content -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navegacion</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="index.html">POO</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="cookies.php">Cookies</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="entradas.php">Todas Entradas</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="login.php">Eliminar/Actualizar Entradas</a>
                </li>
                
            </ul>
            </div>
        </div>
        </nav>
    </nav>
    <br>
    <h1>Cookies</h1>

    <?php

        $ip = $_SERVER['REMOTE_ADDR'];
        $cookie = setcookie('direccion_ip',$ip);
        echo ("La direccion IP es: ". $ip );

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>