<?php
include_once ('conexion.php');

$fecha = $_POST['fecha'];
$nombre = $_POST['nombre'];
$rut = $_POST['rut'];
$telefono = $_POST['telefono'];
$edad = $_POST['edad'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$estadoCivil = $_POST['estadoCivil'];
$prevision = $_POST['prevision'];
$direccion = $_POST['direccion'];
$ocupacion = $_POST['ocupacion'];
$anamnesisProx = $_POST['anamnesisProx'];

$sql_guardar = 'INSERT INTO ficha_clinica (Fecha,Nombre,Rut_Paciente,Telefono,Edad,Fecha_Nac,Estado_Civil,Dirección,Ocupación,Prevision,Anamnesis_Prox) 
VALUES ($fecha,$nombre,$rut,$telefono,$edad,$fechaNacimiento,$estadoCivil,$prevision,$direccion,$ocupacion,$anamnesisProx)';

$resultado = mysqli_query($pdo, $sql_guardar);