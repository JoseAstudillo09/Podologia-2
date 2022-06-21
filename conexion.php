<?php

try {

    $conexion=new PDO("sqlsrv:server=LAPTOP-UOBCF2O0\SALUDAIEP;database=ProyectoPodologia","sa","abc123");

} catch (Exception $e){
    echo "Ocurrió un error en la conexion. " .$e->getMessage();
}