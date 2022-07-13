<?php $pg = "proyecto.php"; ?>
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
    <title>Proyectos</title>
</head>

<body id="proyecto" class="d-flex flex-column h-100">
    <header class="container">
    <?php include_once("menu.php"); ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Los siguientes son algunos trabajos que he realizado:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 p-sm-4 col-12 px-4 py-2">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="images/abmclientes.png" alt="Registro de clientes" class="img-fluid">
                    </div>
                    <div class="col-12 color-gradiente py-3">
                        <h2>ABM Clientes</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex quas eveniet,
                            quidem porro aperiam vero ad aliquid temporibus</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="#" target="_blank" class="btn btn-rojo">Ver Online</a>
                        </div>
                        <div class="col-6 text-center link-rojo">
                            <a href="#" target="_blank">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 p-sm-4 col-12 px-4 py-2">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="images/abmventas.png" alt="Registro de Ventas" class="img-fluid">
                    </div>
                    <div class="col-12 color-gradiente py-3">
                        <h2>Sistema de gestión de ventas</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex quas eveniet,
                            quidem porro aperiam vero ad aliquid temporibus</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="#" target="_blank" class="btn btn-rojo">Ver Online</a>
                        </div>
                        <div class="col-6 text-center link-rojo">
                            <a href="#" target="_blank">Código Fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12 p-sm-4 px-4 py-2">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="images/proyecto-integrador.png" alt="Proyecto integrador" class="img-fluid">
                    </div>
                    <div class="col-12 color-gradiente py-3">
                        <h2>Proyecto integrador</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex quas eveniet,
                            quidem porro aperiam vero ad aliquid temporibus</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="#" target="_blank" class="btn btn-rojo">Ver Online</a>
                        </div>
                        <div class="col-6 text-center link-rojo">
                            <a href="#" target="_blank">Código Fuente</a>
                        </div>
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