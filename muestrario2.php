<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rojela - Ropa Íntima y Perfumería</title>
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Agbalumo&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="icon" href="img/favicon.ico">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    </head>
    <body>

<!-- Botón Flotante -->

        <div class="floating-container">
            <div class="floating-button">+</div>
            <div class="element-container">
                <span class="float-element">
                    <a class="floaty" href="https://instagram.com/rojela.vla?igshid=NGVhN2U2NjQ0Yg=="><iconify-icon class="big-icon1" icon="il:instagram">Instagram</iconify-icon></a>
                </span>
                <span class="float-element">
                    <a class="floaty" href="https://api.whatsapp.com/send/?phone=5492944244420&text&type=phone_number&app_absent=0"><iconify-icon class="big-icon" icon="mdi:whatsapp">Whatsapp</iconify-icon></a>
                </span>
            </div>
        </div>

<!-- Header -->

        <header>
                <div>
                    <img src="img/rojela-removebg-preview.png" class="Rojela2" alt="Logo Rojela 2">
                    <img src="img/Rojela-3-11-2023.png" class="logo" alt="Logo Rojela">
                    <p>Lencería - Ropa Íntima - Perfumería</p>
                </div>
        </header>

<!-- Nav bar -->

        <nav class="navbar1">
            <a href="index.html">INICIO</a>
            <a href="muestrario.html">PERFUMES</a>
            <a href="muestrario1.html">LENCERÍA</a>
            <a class="selectedpage">ROPA INTERIOR</a>
            <a href="registerform.html">CONTACTANOS</a>
        </nav>

<!-- Artículos -->

        <section class="sec">
            <div class="cards">
                
            <?php
            $conexionsql = mysqli_connect('127.0.0.1:3306','root','','productos_rojela');
            $query = "SELECT * FROM productos";
            $resultado = mysqli_query($conexionsql, $query);

            while ($unaCard = mysqli_fetch_assoc($resultado)){
                echo '
                <div class="product">
                            <img src="img/Rojela-3-11-2023.png">
                            <article class="product-text">
                                <h3>'.$unaCard["Producto"].' - '.$unaCard["Marca"].'</h3>
                                <h4 class="description1">'.$unaCard["Descripcion"].'</h4>
                            </article>
                            <article class="price">
                                <h4>$'.$unaCard["Precio"].'</h4>
                            </article>
                            <a href="registerform.html"><button class="consulta">
                                Consultar
                            </button></a>
                            <hr>
                        </div>
                        ';
                        }

                        mysqli_close($conexionsql);

                        ?>
             </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    </body>
</html>