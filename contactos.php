<?php $pg = "contacto.php"; ?>
<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesomeWeb/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesomeWeb/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Contactos</title>
</head>
<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once("menu.php"); ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Contactos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-12">
                <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
            </div>
            <div class="col-sm-6 col-12">
                <form action="" method="POST">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control shadow" placeholder="Nombre">
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" class="form-control shadow"  placeholder="Correo Eléctronico">
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" class="form-control shadow"  placeholder="Teléfono/Whatsapp">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" class="form-control shadow" placeholder="Escribe tu mensaje aquí"></textarea>
                    </div>
                    <div class="">
                        <button type="submit" id="btnEnviar" name="btnEnviar" class="btn">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer class="container mt-auto pb-4">
        <div class="row">
            <div class=" col-12 col-sm-3 mt-5 pb-3">
                <a href="" target="_blank" title="Linkedin"><i class="fa-brands fa-linkedin"></i></a>
                <a href="" target="_blank" title="Github"><i class="fa-brands fa-github"></i></a>
            </div>
            <div class="col-12 col-sm-3 pt-5">
                Sponsor <a href="">DePC Suite</a>
            </div>
            <div class="col-12 col-sm-3 pt-5">
                <a href="mailto:brandoperezinciarte@gmail.com">brandoperezinciarte@gmail.com</a>
            </div>
        </div>
    </footer>
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=541164458051" title="whatsapp"><i class="fab fa-whatsapp"></i></a>
    </div>
</body>
</html>