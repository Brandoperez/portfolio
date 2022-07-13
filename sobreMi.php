<?php $pg = "sobre-mi.php"; ?>
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
    <title>Sobre Mi</title>
</head>

<body id="sobreMi" class="d-flex flex-column h-100">
    <header class="container">
    <?php include_once("menu.php"); ?>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-12 mt-4">
                    <h1 class="mt-sm-4 pb-sm-4">Sobre Mí</h1>
                    <p class="pb-sm-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam ratione labore
                        excepturi non,
                        dolorum obcaecati sint architecto porro, assumenda animi saepe! totam error maiores.</p>
                    <a href="contactos.html" class="btn btn-rojo">Enviar mensaje</a>
                </div>
                <div class="col-sm-4 col-12 mt-4 offset-sm-2">
                    <img src="images/bdpi.jpeg" alt="Brando Pérez" class="img-fluid img-circle" width="210">
                </div>
            </div>
        </div>
        <section id="tecnologias" class="color-gradiente pb-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 ">
                        <h2 class="my-sm-5">Stack Tecnológico</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>HTML</h3>
                            <img src="images/tecnologias/html.png" alt="HTML"
                                class="d-block img-fluid mx-auto" >
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>CSS</h3>
                            <img src="images/tecnologias/css.png" alt="CSS"
                                class="d-block img-fluid mx-auto" >
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Javascript</h3>
                            <img src="images/tecnologias/js.jpeg" 
                            alt="JAVASCRIPT" class="d-block img-fluid mx-auto" >
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Bootstrap</h3>
                            <img src="images/tecnologias/bootstrap.png"
                             alt="BOOTSTRAP" class="d-block img-fluid mx-auto" >
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Git</h3>
                            <img src="images/tecnologias/git.png" 
                            alt="GIT" class="d-block img-fluid mx-auto" >
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>PHP</h3>
                            <img src="images/tecnologias/php.jpeg" 
                            alt="PHP" class="d-block img-fluid mx-auto" >
                        </div>
                    </div>
                </div>
                <div class="row mt-sm-4 mt-0">
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>MySQL</h3>
                            <img src="images/tecnologias/mySql.png" 
                            alt="MySQL" class="d-block img-fluid mx-auto" >
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Laravel</h3>
                            <img src="images/tecnologias/laravel.png" 
                            alt="Laravel" class="d-block img-fluid mx-auto" w>
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Jquery</h3>
                            <img src="images/tecnologias/jquery.jpeg" 
                            alt="Jquery" class="d-block img-fluid mx-auto" >
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>React.js</h3>
                            <img src="images/tecnologias/react.png" 
                            alt="React.js" class="d-block img-fluid mx-auto" >
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Apache</h3>
                            <img src="images/tecnologias/apache.png" 
                            alt="Apache" class="d-block img-fluid mx-auto" >
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Mercado Pago</h3>
                            <img src="images/tecnologias/mp.jpeg" 
                            alt="Mercado Pago" class="d-block img-fluid mx-auto" width="60">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="experiencia" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-briefcase"></i> Experiencia Laboral</h2>
                </div>
            </div>
            <div class="row shadow rounded bg-white">
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="images/experiencia/grido.jpeg" 
                            alt="grido" class="img-fluid baw" width="180">
                        </div>
                        <div class="col-12 col-sm-10 p-5">
                            <h3>Heladería Grido</h3>
                            <h4>Cajero - Atención al cliente</h4>
                            <h5>2018-2021</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                             Officiis praesentium eum rerum porro, fugit tempore hic facilis ducimus facere exercitationem.
                             Consequatur reprehenderit officiis expedita recusandae cumque quo eos rem impedit.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="images/experiencia/luccianos.png" 
                            alt="lucianoss" class="img-fluid baw" width="180">
                        </div>
                        <div class="col-12 col-sm-10 p-5">
                            <h3>Heladería Luccianos</h3>
                            <h4>Atención al Cliente</h4>
                            <h5>1 Trimestre-2018</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Officiis praesentium eum rerum porro, fugit tempore hic facilis ducimus facere exercitationem.
                                Consequatur reprehenderit officiis expedita recusandae cumque quo eos rem impedit.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="images/experiencia/plenario.jpeg" 
                            alt="Plenarios" class="img-fluid baw" width="180">
                        </div>
                        <div class="col-12 col-sm-10 p-5">
                            <h3>Sistemas Plenarios</h3>
                            <h4>Desarrollador Back End</h4>
                            <h5>15 días-2019</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Officiis praesentium eum rerum porro, fugit tempore hic facilis ducimus facere exercitationem.
                                Consequatur reprehenderit officiis expedita recusandae cumque quo eos rem impedit.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="images/experiencia/ss.png" 
                            alt="Farmacia SandraSelma" class="img-fluid baw" width="180">
                        </div>
                        <div class="col-12 col-sm-10 p-5">
                            <h3>Farmacia SandraSelma</h3>
                            <h4>Operador de Mercado Libre</h4>
                            <h5>2021-Actualidad</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Officiis praesentium eum rerum porro, fugit tempore hic facilis ducimus facere exercitationem.
                                Consequatur reprehenderit officiis expedita recusandae cumque quo eos rem impedit.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="images/experiencia/depc.jpeg" 
                            alt="depcsuite" class="img-fluid baw" width="180">
                        </div>
                        <div class="col-12 col-sm-10 p-5">
                            <h3>DePCSuite SA</h3>
                            <h4>Desarrollador Web</h4>
                            <h5>Proximamente...</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Officiis praesentium eum rerum porro, fugit tempore hic facilis ducimus facere exercitationem.
                                Consequatur reprehenderit officiis expedita recusandae cumque quo eos rem impedit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="formacion" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-graduation-cap"></i>Formación Acádemica</h2>
                </div>
            </div>
            <div class="row shadow rounded bg-white p-1">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/formacion/sin-logo.png" 
                            alt="MAO" class="img-fluid baw" width="180">
                        </div>
                        <div class="col-12 col-sm-10 p-5">
                            <h3>Bachiller en ciencias</h3>
                            <h4>U.E Pbro Miguel Angel Ortega</h4>
                            <h5>2016</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/formacion/educacionIt.png" 
                            alt="EducacionIT" class="img-fluid baw" width="180">
                        </div>
                        <div class="col-12 col-sm-10 p-5">
                            <h3>Curso de Html, css, Javascript, BBDD</h3>
                            <h4>EducacionIT</h4>
                            <h5>2018</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/formacion/depc.jpeg" 
                            alt="depcsuite" class="img-fluid baw" width="180">
                        </div>
                        <div class="col-12 col-sm-10 p-5">
                            <h3>Curso de Desarrollo Web Full Stack</h3>
                            <h4>DePCSuite</h4>
                            <h5>2022</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="formacion" class="container mb-4">
            <div class="row">
                <div class="col-12 pt-5 pt-4">
                    <h2><i class="fas fa-graduation-cap"></i>Cursos de Desarrollo Personal</h2>
                </div>
            </div>
            <div class="row shadow rounded bg-white p-1">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/formacion/educacionIt.png" 
                            alt="depcsuite" class="img-fluid baw" width="180">
                        </div>
                        <div class="col-12 col-sm-10 p-5">
                            <h3>Curso Asistente contable</h3>
                            <h4>Educación IT</h4>
                            <h5>2018</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/formacion/udemy.jpeg" 
                            alt="udemy" class="img-fluid baw" width="180">
                        </div>
                        <div class="col-12 col-sm-10 p-5">
                            <h3>Curso de Desarrollo Web</h3>
                            <h4>Udemy</h4>
                            <h5>2019</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/formacion/sin-logo.png" 
                            alt="depcsuite" class="img-fluid baw" width="180">
                        </div>
                        <div class="col-12 col-sm-10 p-5">
                            <h3>Próximo Curso</h3>
                            <h4>Institución Educativa</h4>
                            <h5>2022</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/formacion/sin-logo.png" 
                            alt="depcsuite" class="img-fluid baw" width="180">
                        </div>
                        <div class="col-12 col-sm-10 p-5">
                            <h3>Próximo Curso</h3>
                            <h4>Institución Educativa</h4>
                            <h5>2022</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="idiomas">
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row mr-sm-1 bg-white shadow card-idioma me-sm-1">
                            <div class="col-4 card text-center">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>Idiomas</h2>
                                <ul>
                                    <li>Español-Nativo</li>
                                    <li>ingles-Básico</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="row ml-sm-1 bg-white shadow card-idioma ms-sm-1">
                            <div class="col-4 card text-center">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>Hobbies</h2>
                                <ul>
                                    <li>Ver Series</li>
                                    <li>Cocinar</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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