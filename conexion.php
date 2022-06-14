<?php

try {

    $conexion=new PDO("sqlsrv:server=LAPTOP-RTA90HBT\SQLEXPRESS;database=ProyectoPodologia","salud","podologia2022");

} catch (Exception $e){
    echo "Ocurrió un error en la conexion. " .$e->getMessage();
}