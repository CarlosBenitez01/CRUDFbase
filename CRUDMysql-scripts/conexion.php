<?php
$mysqlConexion = new mysqli("localhost","root","","android_mysql1");
if($mysqlConexion->connect_error){
    die ("Error en la conexion");
}else{
    echo "Conexion exitosa";
}
?>