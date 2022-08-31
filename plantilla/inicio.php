<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
                alert("Por favor debes iniciar sesion");
            </sript>    
        ';
        header("location: index.php");
        session_destroy();
        die();
    }


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Historia Antigua</title>

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="trabajo/css/principal.css">
    <link rel="stylesheet" href="trabajo/css/blog.css">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

</head>
<body>

    <header>

        <div class="header-content">

            <div class="logo">
                <h1>Historia<b>Antigua</b></h1>
            </div>

            <div class="menu" id="show-menu">

                <nav>
                    <ul>
                        <li><a href="inicio.php"> <i class="fas fa-home"></i> Inicio</a></li>
                        <li class="menu-selected"><a href="universal.html" class="text-menu-selected"><i class="fas fa-file-alt"></i>Universal</a></li>
                        <li><a href="php/cerrar_sesion.php"> <i class="fas fa-home"></i>Cerrar sesion</a></li>                    
                    </ul>
                </nav>

            </div>

            <div id="ctn-icon-search">
                <i class="fas fa-search" id="icon-search"></i>
            </div>

        </div>

        <div id="icon-menu">
            <i class="fas fa-bars"></i>
        </div>

    </header>


    <div id="ctn-bars-search">
        <input type="text" id="inputSearch" placeholder="¿Qué deseas buscar?">
    </div>

    <ul id="box-search">
        <li><a href="1.html"><i class="fas fa-search"></i>Romana</a></li>
        <li><a href="2.html"><i class="fas fa-search"></i>Egipcia</a></li>
        <li><a href="3.html"><i class="fas fa-search"></i>China</a></li>
        <li><a href="4.html"><i class="fas fa-search"></i>Alemana</a></li>
        <li><a href="5.html"><i class="fas fa-search"></i>Francesa</a></li>
        <li><a href="6.html"><i class="fas fa-search"></i>Britanica</a></li>
        <li><a href="7.html"><i class="fas fa-search"></i>Americana</a></li>
        <li><a href="8.html"><i class="fas fa-search"></i>Rusa</a></li>
    </ul>

    <div id="cover-ctn-search"></div>

    <div class="container-all" id="move-content">

    
    <div class="blog-container-cover">
        <div class="container-info-cover">
            <h1>¡Repasemos los hechos mas importantes del mundo!</h1>
            <p>El mundo contiene mucha informacion sobre nuestros antepasados veremos las historias de estos grande suscesos</p>
        </div>
    </div>

    <div class="container-post">

        <input type="radio" id="TODOS" name="categories" value="TODOS" checked>
        <input type="radio" id="Universal" name="categories" value="Universal">
        <input type="radio" id="Romana" name="categories" value="Romana">
        <input type="radio" id="Egipcia" name="categories" value="Egipcia">
        <input type="radio" id="China" name="categories" value="China">
        <input type="radio" id="Alemana" name="categories" value="Alemana">
        <input type="radio" id="Francesa" name="categories" value="Francesa">
        <input type="radio" id="Britanica" name="categories" value="Britanica">
        <input type="radio" id="Americana" name="categories" value="Americana">
        <input type="radio" id="Americana" name="categories" value="Rusa">

        <div class="container-category">
            <label for="TODOS">TODOS</label>
            <label for="Universal">Universal</label>
            <label for="Romana">Romana</label>
            <label for="Egipcia">Egipcia</label>
            <label for="China">China</label>
            <label for="Alemana">Alemana</label>
            <label for="Francesa">Francesa</label>
            <label for="Britanica">Britanica</label>
            <label for="Americana">Americana</label>
            <label for="Americana">Rusa</label>
        </div>

        <div class="posts">

            <div class="post" data-category="Romana">

                <div class="ctn-img"><img src="trabajo/img/romanos y egipcio.jfif" alt=""></div>
                <h2>El primer gran imperio</h2>
                <span>23 mayo 2022 - 9:59 pm</span>
                <ul class="ctn-tag">
                    <li>Romana</li>
                    <li>Egipcia</li>
                </ul>
                <a href="1.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="Egipcia">

                <div class="ctn-img"><img src="trabajo/img/cleopatra.jfif" alt=""></div>
                <h2>La empreratriz que se creia en un dios</h2>
                <span>23 mayo 2022 - 9:59 pm</span>
                <ul class="ctn-tag">
                    <li>Egipcia</li>
                </ul>
                <a href="2.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="China">

                <div class="ctn-img"><img src="trabajo/img/china.jpg" alt=""></div>
                <h2>Los conflictos asiaticos</h2>
                <span>23 mayo 2022 - 9:59 pm</span>
                <ul class="ctn-tag">
                    <li>China</li>
                </ul>
                <a href="3.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="Alemana">

                <div class="ctn-img"><img src="trabajo/img/la gran guerra.jpeg" alt=""></div>
                <h2>El inicio de la gran guerra</h2>
                <span>23 mayo 2022 - 9:59 pm</span>
                <ul class="ctn-tag">
                    <li>Alemana</li>
                    <li>Americana</li>
                    <li>Francesa</li>
                    <li>Britanica</li>
                    <li>Rusa</li>
                </ul>
                <a href="4.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="Francesa">

                <div class="ctn-img"><img src="trabajo/img/Revolución Francesa.webp" alt=""></div>
                <h2>El inicio de una revolucion</h2>
                <span>23 mayo 2022 - 9:59 pm</span>
                <ul class="ctn-tag">
                    <li>Francesa</li>
                </ul>
                <a href="5.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="Britanica">

                <div class="ctn-img"><img src="trabajo/img/revolucion industrial.jfif" alt=""></div>
                <h2>Una nueva era</h2>
                <span>23 mayo 2022 - 9:59 pm</span>
                <ul class="ctn-tag">
                    <li>Britanica</li>
                </ul>
                <a href="6.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="Americana">

                <div class="ctn-img"><img src="trabajo/img/tio sam.jfif" alt=""></div>
                <h2>La realidad del tio sam</h2>
                <span>23 mayo 2022 - 9:59 pm</span>
                <ul class="ctn-tag">
                    <li>Americana</li>
                    <li>Rusa</li>
                </ul>
                <a href="7.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="Rusa">

                <div class="ctn-img"><img src="trabajo/img/comunismo.jpeg" alt=""></div>
                <h2>El frio se avecina</h2>
                <span>23 mayo 2022 - 9:59 pm</span>
                <ul class="ctn-tag">
                    <li>Rusa</li>
                </ul>
                <a href="8.html"><button>leer más</button></a>

            </div>

        </div>

    </div>

    <div id="button-up">
        <i class="fas fa-chevron-up"></i>
    </div>



    <div class="container-footer">	

        <footer>
            <div class="logo-footer">
                <img src="trabajo/img/Logo H.png" alt="">
            </div>

            <div class="redes-footer">
                <a href="#"><i class="fab fa-facebook-f icon-redes-footer"></i></a>
                <a href="#"><i class="fab fa-google-plus-g icon-redes-footer"></i></a>
                <a href="#"><i class="fab fa-instagram icon-redes-footer"></i></a>
            </div>

            <hr>
            <h4>© 2022 PEKKA - Todos los Derechos Reservados</h4>

        </footer>

    </div>

</div>

    <script src="trabajo/js/script.js"></script>
</body>
</html>