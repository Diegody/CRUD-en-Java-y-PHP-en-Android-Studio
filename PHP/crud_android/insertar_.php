<?php
$conexion = mysqli_connect('localhost', 'root', '', 'crud_android');
if(!$conexion) {
    echo "error en conexion";
}

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];

$query = "INSERT INTO usuario (nombre, correo, direccion) VALUES ('$nombre', '$correo', '$direccion')";
$resultado = mysqli_query($conexion, $query);

if($resultado) {
    echo "datas insertados";
} else {
    echo "datas error";
}

mysqli_close($conexion);