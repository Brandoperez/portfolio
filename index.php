<?php $pg = "index.php"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesomeWeb/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesomeWeb/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Inicio</title>
</head>

<body id="inicio">
    <header class="container">
    <?php include_once("menu.php"); ?>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-4 mx-auto text-center cohete">
                    <a href="proyectos.php"><img src="images/cohete.svg" alt="Cohete" class="img-cohete"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 my-5 mt-sm-5 text-center mb-3 offset-sm-3">
                    <div class="input-home">
                        <p class="p-1">Bienvenidos a mi sitio de Dearrollo Web</p>
                    </div>
                    <div class="col-12 text-center pt-2">
                        <a href="proyectos.php" class="btn shadow ">Conoce mis proyectos</a>
                    </div>
                </div>
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