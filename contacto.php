<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="contacto">
    <header class="container">
        <nav class="navbar navbar-expand-md mb-4">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1" href="sobre-mi.php">Sobre mí</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1 active" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a class="btn btn-rojo">Descargar mi CV <i class="fa-solid fa-file-arrow-down"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que te contactes conmigo.</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="post">
                    <div class="mb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre"
                            class="form-control shadow">
                    </div>
                    <div class="mb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo Electrónico"
                            class="form-control shadow">
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Número de Teléfono"
                            class="form-control shadow">
                    </div>
                    <div class="mb-3">
                        <textarea name="txtMensansaje" id="txtMensansaje" placeholder="Escriba aquí su mensaje"
                            class="form-control shadow"></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" id="btnEnviar" name="btnEnviar"
                            class="btn btn-blanco shadow-btn-C px-4">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-3">
                <a href="https://github.com" title="GitHub">
                    <i class="fa-brands fa-github mx-2"></i></a>

                <a href="https://www.linkedin.com/in/iñaki-iezzi-201275236/" title="Linkedin" target="_blank">
                    <i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3">Sponsor <a href="https://depcsuite.com">DePC Suite</a></div>
            <div class="col-12 col-sm-3"><a href="mailto:iezzi.2011@hotmail.com>">iezzi.2011@hotmail.com</a></div>
        </div>
    </footer>
    <div class="whatsapp pt-2 pb-3 px-3">
        <a href="https://wa.me/542236169894" </a>
            <i class="fa-brands fa-whatsapp"></i>
    </div>
</body>

</html>