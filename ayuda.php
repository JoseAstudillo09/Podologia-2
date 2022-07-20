<?php
  session_start();
  if(!isset($_SESSION['nombre'])){
    header('Location: login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayuda</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans&family=Source+Sans+Pro:ital,wght@0,300;1,400&display=swap" rel="stylesheet">
  
    <link rel="stylesheet" href="./css/custom.css">
</head>
<body class="bg-light bg-gradient">
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">
                <img src="./imagenes/logo-400x140.png" alt="" width="150" height="70">
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-dark" aria-current="page" href="#">Ayuda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./stockProd.php">Stock de insumos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Ficha de observación</a>
              </li>
            </ul>
            <span class="navbar-text ">
                Escuela de salud
                <br>
                <p class="fst-italic">“Humanizando la atención en Salud”</p>
              </span>
          </div>
        </div>
      </nav>
    <!-- Contenido -->
    <!-- Nomenclatura podológica -->
    <div class="mx-auto p-1">
        <form class="row g-3 mb-3 border border-secondary border-2 rounded-3 mx-2">
            <div class="mb-1">
                <input class="form-control mb-2" type="text" placeholder="Nomenclatura podológica" aria-label="Disabled input example" disabled>
            </div>
            <div class="table-responsive">
                <table class="table table-responsive">
                    <thead>
                        <th><img src="./imagenes/img nomenclatura.jpg" class="img-fluid mb-3" alt=""></th>
                    </thead>
                </table>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>