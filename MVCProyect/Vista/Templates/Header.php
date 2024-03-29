<?php
$currentPage = basename($_SERVER['PHP_SELF']);
require_once "./controladores/config.php";
?>
<!doctype html>
<html lang="es">
    <head>
        <title>Cinema</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="./Diseño/styleindex.css" >
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
<body >
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Cinema</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage == 'index.php' || empty($currentPage)) ? 'active' : ''; ?>" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo ($currentPage == 'catalogo.php') ? 'active' : ''; ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Catalogo
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">ACCION</a></li>
                            <li><a class="dropdown-item" href="#">AVENTURA</a></li>
                            <li><a class="dropdown-item" href="#">SUSPENSO</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#" id="boton ">vienen mas...</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage == 'soporte.php') ? 'active' : ''; ?>" href="#">Soporte</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-danger"  type="submit"><?php require_once "./Diseño/templateimage/imgbag.php" ?><span id="Cart" class="badge bg-primary"><?php echo $num_cart ?></span></button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Close and start MAIN on HTML -->