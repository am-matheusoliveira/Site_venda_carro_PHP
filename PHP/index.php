<!doctype html>
<html lang="pt-br">
    <head>
        <title>Itapú Veículos</title>
        <!--<meta charset="utf-8"/>   Temos essa opção e abaixo temos uma mais completa-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="../CSS/estilo.css" />
        <link rel="icon" href="../IMG/logoGoogle.png" />
    </head>
    <body>
        <div id="interface">
            <!--Menu princiapl do site-->
            <header>
                <?php 
                    include("topo.php");
                ?>
            </header>
            <!--Slide da Pagina-->
            <section id="slider">
                <?php
                    require("../HTML/slider.html");
                ?>
            </section>
            <!--Local de busca dos veículos-->
            <section id="buscador">
                <?php
                    include("buscador.php");
                ?>
            </section>
            <!---->
            <section id="destaque">
                <?php
                    include("../HTML/destaque.html");
                ?>
            </section>   
            <!---->
            <section id="rodape">
                <?php
                    include("../HTML/rodape.html");
                ?>
            </section>   
        </div>
    </body>
</html>