<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Inventario de productos - Rojela - Ropa Íntima y Perfumería</title>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Agbalumo&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
            <link rel="icon" href="img/favicon.ico">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.0/mdb.min.css"rel="stylesheet"/>
            <link rel="stylesheet" href="style.css">
    </head>
    <body>

<!-- Header -->
            
            <header>
                <div>
                    <img src="img/rojela-removebg-preview.png" class="Rojela2" alt="Logo Rojela 2">
                    <img src="img/Rojela-3-11-2023.png" class="logo" alt="Logo Rojela">
                    <p>Lencería - Ropa Íntima - Perfumería</p>
                </div>
            </header>

<!-- Nav bar -->

            <nav class="navbar">
                <a href="index.html">INICIO</a>
                <a href="muestrario.html">PERFUMES</a>
                <a href="muestrario1.html">LENCERÍA</a>
                <a href="muestrario2.html">ROPA INTERIOR</a>
                <!-- <a href="">INGRESAR</a>
                <a href="" class="subindice">Alta de un producto</a>
                <a href="" class="subindice">Editar un producto</a> -->
            </nav>

<!-- Listado de Productos -->            

            <section class="pb-5 header text-center">
            <div class="container py-3 text-black-80">
                <header class="py-5">
                    <h1 class="display-4">STOCK DE PRODUCTOS</h1>
                </header>
                <div class="row">
                        <div class="col-lg-7 mx-auto">
                            <div class="card border-0 shadow">
                                <div class="card-body p-5">
                                    <div class="table-responsive">
                                        <table class="table m-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Marca</th>
                                                    <th scope="col">Producto</th>
                                                    <th scope="col">Precio</th>
                                                    <th scope="col">Stock</th>
                                                    <th scope="col">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $conexionsql = mysqli_connect('127.0.0.1:3306','root','','productos_rojela');
                                                $query = "SELECT * FROM productos";
                                                $resultado = mysqli_query($conexionsql, $query);
                                                
                                                while ($unaFila = mysqli_fetch_assoc($resultado))
                                                {
                                                    echo'<tr>
                                                        <td scope=1>'.$unaFila["Marca"].'</td>
                                                        <td>'.$unaFila["Producto"].'</td>
                                                        <td>$'.$unaFila["Precio"].'</td>
                                                        <td>'.$unaFila["Stock"].'</td>
                                                        <td>
                                                            <ul class="list-inline m-0">
                                                                <li class="list-inline-item">
                                                                    <a href="editar_producto.php?id='.$unaFila["id"].'"><button class="btn btn-success btn-sm rounded-0 m-0" type="button" title="Edit"><i class="fa-solid fa-pen-to-square"></i></button></a>
                                                                </li>
                                                                <li class="list-inline-item" p-1>
                                                                    <a href="borrar_producto.php?id='.$unaFila["id"].'"><button class="btn btn-danger btn-sm rounded-0 m-0" type="button" title="Delete"><i class="fa-solid fa-trash-can"></i></button></a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>';
                                                }      

                                                if(isset($_GET['delete_msg'])){
                                                    echo "<h6 color=red>".$_GET['delete_msg']."</h6><br>";
                                                }
                                                if(isset($_GET['update_msg'])){
                                                    echo "<h6 color=green>".$_GET['update_msg']."</h6><br>";
                                                }

                                                mysqli_close($conexionsql);
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/1c647da0f0.js" crossorigin="anonymous"></script>
    </body>
</html>