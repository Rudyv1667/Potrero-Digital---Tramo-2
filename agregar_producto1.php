<?php 

$conexionsql = mysqli_connect('127.0.0.1:3306','root','','productos_rojela');

if(isset($_POST['Agregar_producto'])){
    $Marca = $_POST['Marca'];
    $Producto = $_POST['Producto'];
    $Precio = $_POST['Precio'];
    $Stock = $_POST['Stock'];
    $Descripcion = $_POST['Descripcion'];

    $query = "INSERT INTO productos (Marca, Producto, Precio, Stock, Descripcion) VALUES ('$Marca', '$Producto', '$Precio', '$Stock', '$Descripcion')";
    $resultado = mysqli_query($conexionsql, $query);

    if(!$resultado){
        header('location:inventario_producto.php?add_msg=Algo falló al agregar el producto');
    } else {
        header('location:inventario_producto.php?add_msg=Agregaste el producto exitosamente');
    }

} else {
    header('location:inventario_producto.php?add_msg=No se recibieron datos del formulario');
}

mysqli_close($conexionsql);
?>
