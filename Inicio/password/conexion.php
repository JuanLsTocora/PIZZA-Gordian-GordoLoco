<?php

//Conexion por procedimientos
$link = mysqli_connect("localhost","root","","tecnico_2025");

if(!$link){
    die ("Conexión fallida: " . mysqli_connect_error());
    echo "Acceso denegado :-(";
}
?>