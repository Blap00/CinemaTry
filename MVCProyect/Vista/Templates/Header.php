<body >
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cinema</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a class="nav-link" href="#">Soporte</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-danger" type="submit"><?php require_once "./Diseño/templateimage/imgbag.php" ?></button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Close and start MAIN on HTML -->