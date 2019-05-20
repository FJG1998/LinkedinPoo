<?php include_once ('php/datos.php');
include_once ('php/funciones.php');

inicioHTML('css/reset.css','css/index.css','Linkedinpropio');?>

<body>

    <div id="contenedor">
        <!--En  el header va arriba, normalmente con el logotipo, info principal y resumen-->
        <header>
            <!--h1=logotipo-->
            <h1 class="logotipo"><span>

            <?php echo($fran->logo()); ?>
            
            </span></h1>
            <!--info contacto-->

            <div class="info">
                <h2 class="nombre">
                    <?php
                    echo($fran->nombre);
                    echo(' ' . $fran->apellido);
                    ?>
                </h2>

                <h3 class="subtitulo">
                    <?php
                    echo($fran->subtitulo);
                    ?>
                </h3>
                <!--metodologia BEM se utiliza de la siguiente manera en relacion cajas padre=> hijo, para saber quien es el padre de quien y
             al final el "--rojo" por ejemplo sirve para saber las modificaciones en css que le vamos a poner-->
                <ul class="infoContacto">
                    <li class="infoContacto__mail">
                        <span class="infoContacto__mail--black">Mail: </span>
                        <?php
                        echo($fran->email);
                        ?>
                    </li>
                    <li class="infoContacto__movil">
                        <span class="infoContacto__movil--black">Movil: </span>
                        <?php
                        echo($fran->movil);
                        ?>
                    </li>
                    <li class="infoContacto__linkedin">
                        <span class="infoContacto__linkedin--black">Linkedin: </span>
                        <?php
                        echo($fran->linkedin);
                        ?>
                    </li>
                    <li class="infoContacto__twitter">
                        <span class="infoContacto__twitter--black">Twitter: </span>
                        <?php
                        echo($fran->twitter);
                        ?>
                    </li>
                </ul>
            </div>

        </header>
        <!--margen vertical entre modulos-->
        <div class="margenVertical"></div>
        <!--***************************-->
        <section class="resumen">
            <h4>Resumen de mi carrera</h4>
            <hr>
            <p class="resumen__parrafo">
                <?php
                echo($resumen);
                ?>
            </p>
        </section>
        <!-- margen vertical entre modulos -->
        <div class="margenVertical"></div>
        <!-- *************************** -->

        <!-- seccion centro de la web-->

        <div class="sectionCentral">
            <!-- zona de experiencia -->
            <section class="experiencia">

                <h4 class="experiencia__titulo">Experiencia</h4>
                <hr>
                <!-- PHP *********************************************************** -->
                <?php
                experiencia();
                ?>
                <!-- ********************************************************************************** -->
            </section>
            <!-- zona de habilidades a la derecha del navegador -->
            <aside class="habilidades">

                <h4>Habilidades & Herramientas</h4>
                <hr>
                <!-- PHP********************************** -->

                <?php
                aside();
                ?>

                <!-- ******************************************************** -->
            </aside>
        <!--margen vertical entre modulos-->
        <div class="margenVertical"></div>
        <!--***************************-->
        </div>
        </section>

        <section class="pryectos">
        <h4 class="proyectos__titulo"></h4>
        <hr>
        <!-- PHP*************************** -->
        <?php
        proyectos();
        ?>
 
        </section>

        <!-- margen vertical entre modulos -->
        <div class="margenVertical"></div>
        <!-- *************************** -->
    </div>
</body>

</html>