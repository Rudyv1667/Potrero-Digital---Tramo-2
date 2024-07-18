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
    header('location:inventario_producto.php?update_msg=Ocurrió un error al actualizar el producto');
}
    else{
        $unaFila = mysqli_fetch_assoc($resultado); 
    }

if(isset($_POST['Editar_producto'])){

    if(isset($_GET['id_nuevo'])){
    $idnuevo = $_GET['id_nuevo'];
    $Marca = $_POST['Marca'];
    $Producto = $_POST['Producto'];
    $Precio = $_POST['Precio'];
    $Stock = $_POST['Stock'];
    $Descripcion = $_POST['Descripcion'];

    $query = "UPDATE productos SET Marca = ".$Marca.", Producto = ".$Producto.", Precio = ".$Precio.", Stock = ".$Stock.", Descripcion = ".$Descripcion." 
    WHERE id = ".$idnuevo;
    $resultado = mysqli_query($conexionsql, $query);

    if(!$resultado){
        if(isset($_POST['Editar_producto'])){
            header('location:inventario_producto.php?update_msg=Ocurrió un error al actualizar el producto');           
        }
        else{
            header('location:inventario_producto.php?update_msg=Actualizaste el producto exitosamente');
        }
    }
    }
}

mysqli_close($conexionsql);

?>