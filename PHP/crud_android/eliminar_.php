<?php
$conexion = mysqli_connect('localhost', 'root', '', 'crud_android');
if(!$conexion) {
    echo "error en conexion";
}

$id = $_POST['id'];

$query = "DELETE FROM usuario WHERE id = '$id'";
$result = mysqli_query($conexion, $query);

if($result) {
    echo "datos eliminados";
} else {
    echo "error";
}

mysqli_close($conexion);