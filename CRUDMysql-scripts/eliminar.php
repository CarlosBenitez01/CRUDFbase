<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    require_once 'conexion.php';
    $id=$_POST["id"];
    $resultado=$mysqlConexion->query($eliminar);
    if
    if($resultado == true){
        echo "Usuario eliminado existosamente";
    }else{
        echo "Error, no se pudo eliminar el usuario";
    }
    $mysqlConexion->close();
}