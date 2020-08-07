<?php include_once('includes/header.php'); ?>
<body>
    <nav id="inicio">
        <div class="caja-flex filas">
            <div class="cont-titutlo-principal f-1">
                <h1><a href=""><span> Javier GMo</span></a></h1>
            </div><!--logo o slogan-->
            <div id="menu-opciones-nav" class="f-1 caja-flex filas cont-opciones-nav columnas-resw pos-abolute-resw oculto-resw">
                <div class="opcion-nav"><a href="#inicio"><p><span class="spn-opci">Inicio</span></p></a></div>
                <div class="opcion-nav"><a href="#sobremi"><p><span class="spn-opci">Sobre mi</span></p></a></div>
                <div class="opcion-nav"><a href="#trabajos"><p><span class="spn-opci">Trabajos</span></p></a></div>
                <div class="opcion-nav"><a href="#skills"><p><span class="spn-opci">Skills</span></p></a></div>
                <div class="opcion-nav"><a href="#contacto"><p><span class="spn-opci">Contacto</span></p></a></div>
            </div><!--opciones de navegacion nav-->
            <div id="btn-hambur" class="btn barra-hambur oculto"><i id="icon-hambur" class="barra fa fa-bars"></i></div><!--menu hamburguesa-->
        </div><!--contenedor para dar estilos a los demas divs-->
    </nav><!--nav-->
    <div class="contenedor-principal">
        <div id="sobremi" class="caja-flex filas filas-rew cont-sobre-mi card">
            <div class="visible oculto-resw cont-img-sobremi">
                <img src="assets/imgs/logomio.png" alt="imagen card" class="img-card">
            </div>
            <div class="caja-flex columnas columnas-resw centrar">
                <div class="cont-titulo-sobre-mi"><h1><span>Sobre mi...</span></h1></div><!--titulo del contenedor-->
                <div>
                    <p>
                        Hola, me llamo Javier, soy del Edo. de México, tengo 22 años.<br><br>
                        Soy apasionado por las teconologias y de leer mangas (One Piece).<br><br>
                        Me gusta aprender sobre tecnologias actuales y como se aplican en diferentes aspectos, así como aprender dee otras areas,
                        como de biologia, astronomia y magia.<br><br>
                        A lo largo de estos años he desarrollado proyecots para poner aprueba lo que he aprendido, mejor mis habilidades y aprender de otras que lo complementan.
                    </p>
                </div><!--mi descripcion-->
            </div><!--cont para la info de mi--> 
        </div><!--Contenedor principal sobre mi-->

        <div id="trabajos" class="cont-trabajos caja-flex columnas columnas-resw centrar card">
            <div><h1><span>Trabajos</span></h1></div><!--titulo del contenedor-->
            <div class="caja-flex filas centrar cont-img-flechas">
                <div id="btn-flecha-left" class="flecha-left"><i class="fa fa-angle-left"></i></div><!--flechas direccional: izq-->
                <div class="caja-flex columnas centrar cont-img-trabajos">
                    <img id="imagen-de-trabajo" src="" alt="" class="img-trabajos">
                </div><!--cont para imagenes-->
                <div id="btn-flecha-right" class="flecha-right"><i class="fa fa-angle-right"></i></div><!--flechas direccional: der-->
            </div><!--contenedor de imagenes-->
            <div class="cont-text-proyecto"><p id="texto-de-trabajos" class="texto-proyecto"></p></div><!--texto del trabajo-->
        </div><!--Contenedor principal de mis trabajos-->

        <div id="skills" class="cont-skills card">
            <div class="caja-flex columnas centrar">
                <h1><span>Skills</span></h1>
            </div><!--titulo del contenedor-->
            <div class="cont-skills-second caja-flex filas columnas-resw centrar">
                <div id="skill-programacion" class="skills-opciones">
                    <div class="caja-flex filas-rew centrar"><h3>Lenguajes de programacion </h3> <i id="flecha-1" class="fa fa-sort-down flecha-desple"></i></div>
                    <div id="cont-list-progra" class="lista-skills oculto-resw">
                        <ul>
                            <li>C</li>
                            <li>Python</li>
                            <li>Java</li>
                            <li>JavaScript</li>
                            <li>PHP</li>
                        </ul>
                    </div><!--lista-->
                </div><!--Lenguajes de programacion-->
                <div id="skill-web" class="skills-opciones">
                    <div class="caja-flex filas-rew centrar"><h3>Desarollo web </h3> <i id="flecha-2" class="fa fa-sort-down flecha-desple"></i></div>                
                    <div id="cont-list-web" class="lista-skills oculto-resw">
                        <ul>
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>JavaScript</li>
                            <li>Bootstrap</li>
                            <li>PHP</li>
                        </ul>
                    </div><!--lista de opciones-->
                </div><!--Desarrollo web-->
                <div id="skill-moviles" class="skills-opciones">
                    <div class="caja-flex filas-rew centrar"><h3>Desarollo de apps </h3> <i id="flecha-3" class="fa fa-sort-down flecha-desple"></i></div>
                    <div id="cont-list-moviles" class="lista-skills oculto-resw">
                        <ul>
                            <li>Java</li>
                            <li>Dart/Flutter</li>
                            <li>SQLite</li>
                        </ul>
                    </div><!--lista de opciones-->                    
                </div><!--Desarrollo de apps-->
            </div><!--todas mis skills-->
        </div><!--Contenedor principal de mis skills-->

        <div id="contacto" class="cont-contactos caja-flex filas columnas-resw card">
            <div class="cont-titulo-contacto f-1">
                <h1><span>Contacto</span></h1>
            </div><!--titulo del contenedor-->
            <div class="f-1 ref-contactos">
                <div>
                    <p>
                        <a href="tel:5533505088"><i class="fa fa-phone"></i> Marcar:</a> 5533505088
                    </p>
                </div>
                <div>
                    <p>
                        <a href="mailto:jinjuriki62@gmail.com"><i class="fa fa-envelope"></i> Enviar correo:</a>
                        jinjuriki62@gmail.com
                    </p>
                </div>
                <div>
                    <p>                        
                        <a href="https://www.linkedin.com/in/javiergonzalezmora/" target="_blank"><i class="fa fa-linkedin"></i> Linkedin</a>
                    </p>
                </div>
            </div>
        </div><!--Contenedor principal de contacto-->

    </div><!--Contenedor principal-->
    <footer>
        <div class="cont-footer caja-flex filas centrar">
            <div><p><span>Copyright &copy; 2020 Javier Gonzalez Mora. Todos los derechos reservado. </span></p></div>
        </div><!--contenedor para opciones del footer-->
    </footer><!--footer-->
    <script src="assets/js/main.js"></script>

</body>
</html>