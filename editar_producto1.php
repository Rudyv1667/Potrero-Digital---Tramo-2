<?php

$conexionsql = mysqli_connect('127.0.0.1:3306','root','','productos_rojela');

if(isset($_POST['id_nuevo'])){
    $idnuevo = $_POST['id_nuevo'];
    $Marca = $_POST['Marca'];
    $Producto = $_POST['Producto'];
    $Precio = $_POST['Precio'];
    $Stock = $_POST['Stock'];
    $Descripcion = $_POST['Descripcion'];

    $query = "UPDATE productos SET Marca = '".$Marca."', Producto = '".$Producto."', Precio = '".$Precio."', Stock = '".$Stock."', Descripcion = '".$Descripcion."' 
    WHERE id = ".$idnuevo;
    echo $query;
    $resultado = mysqli_query($conexionsql, $query);

if($resultado){
        header('location:inventario_producto.php?update_msg=Actualizaste el producto exitosamente');
    }
    else{
        header('location:inventario_producto.php?update_msg=Algo falló al actualizar el producto');
    }
}

mysqli_close($conexionsql);

?>