<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Agregar un producto - Rojela - Ropa Íntima y Perfumería</title>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Agbalumo&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
            <link rel="icon" href="img/favicon.ico">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.0/mdb.min.css"rel="stylesheet"/>
            <link rel="stylesheet" href="style.css">
    </head>

<?php
$conexionsql = mysqli_connect('127.0.0.1:3306','root','','productos_rojela');
$query = "SELECT * FROM productos";
$resultado = mysqli_query($conexionsql, $query);

if(isset($_GET['id'])){
    $id = $_GET['id'];

$query = "SELECT * FROM productos WHERE id = '$id'";
$resultado = mysqli_query($conexionsql, $query);
}

if(!$resultado){
    header('location:inventario_producto.php?update_msg=Ocurrió un error al agregar un producto');
}
    else{
        $unaFila = mysqli_fetch_assoc($resultado); 
    }

echo '

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

<!-- Formulario -->            

            <form name="submit-to-google-sheet" class="submit-to-google-sheet" action="agregar_producto1.php" method="post">
                <fieldset>
                <legend>
                    Agregar un producto
                </legend>
                <label for="Proveedor" class="Proveedor">Proveedor</label>
                <input type="text" name="Marca" id="Proveedor"></input>

                <label for="Producto" class="Producto">Producto</label>
                <input type="text" name="Producto" id="Producto"></input>

                <label for="Precio" class="Precio">Precio</label>
                <input type="number" name="Precio" id="Precio"></input>
            
                <label for="Cantidad" class="Cantidad">Cantidad</label>
                <input type="number" id="Cantidad" name="Stock"></input>

                <label for="Descripcion" class="Descripcion">Descripcion</label>
                <input type="text" id="Descrip" name="Descripcion"></input>

                <label for="Foto" class="Foto">Foto</label>
                <input type="file" class="form-control" id="Foto"/></input>

                <input type="hidden" id="id_nuevo" name="id_nuevo">

                <button type="submit" name="Agregar_producto" value="Agregar producto">Agregar producto</button>
                </fieldset>
            </form>


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
';
mysqli_close($conexionsql);
?>