<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Borrar un producto - Rojela - Ropa Íntima y Perfumería</title>
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

<!-- Pregunta de confirmación -->        

            <?php 
            
            $conexionsql = mysqli_connect('127.0.0.1:3306','root','','productos_rojela');

            if(isset($_GET['id'])){
                $id = $_GET['id'];
            }

            $query1= 'DELETE from productos WHERE id = "$id"';
            $resultado= mysqli_query($conexionsql, $query1);

            if(!$resultado){
                die("Query Failed");
            }
                else{
                    header('location:inventario_producto.php?delete_msg=Eliminaste el producto exitosamente');
                }
            
            ?>
            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/1c647da0f0.js" crossorigin="anonymous"></script>
    </body>
</html>