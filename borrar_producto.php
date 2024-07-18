<?php 

$conexionsql = mysqli_connect('127.0.0.1:3306','root','','productos_rojela');

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$query1= 'DELETE from productos WHERE id = '.$id;
$resultado= mysqli_query($conexionsql, $query1);

if(!$resultado){
    header('location:inventario_producto.php?delete_msg=Algo falló al eliminar el producto');
}
    else{
        header('location:inventario_producto.php?delete_msg=Eliminaste el producto exitosamente');
    }

?>