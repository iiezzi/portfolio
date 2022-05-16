<?php

$pg="contacto";

if($_POST){
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $telefono = $_POST["txtTelefono"];
    $mensaje = $_POST["txtMensaje"];

$para  = "iezzi.2011@hotmail.com"; 
$título = 'Mensaje enviado desde tu web';

$cuerpo = "
Nombre: $nombre <br>
Corre: $correo <br>
Telefono: $telefono <br>
Mensaje: $mensaje <br>
";

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$cabeceras .= "To: iezzi.2011@hotmail.com ". "\r\n";
$cabeceras .= 'From: contacto@iezzi.com.ar' . "\r\n";

//mail($para, $título, $mensaje, $cabeceras);
header("Location: confirmacion.php");
}
?>
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
<?php include_once("header.php")?>
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
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control shadow">
                    </div>
                    <div class="mb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo Electrónico" class="form-control shadow">
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Número de Teléfono" class="form-control shadow">
                    </div>
                    <div class="mb-3">
                        <textarea name="txtMensansaje" id="txtMensansaje" placeholder="Escriba aquí su mensaje" class="form-control shadow"></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-blanco shadow-btn-C px-4">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php include_once("footer.php")?>
    <div class="whatsapp pt-2 pb-3 px-3">
        <a href="https://wa.me/542236169894" </a>
            <i class="fa-brands fa-whatsapp"></i>
    </div>
</body>

</html>