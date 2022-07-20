<?php
    session_start();
    include_once 'conexion.php';
    $usuario = $_POST['txtCorreo'];
    $contraseña = $_POST['txtPass'];

    $sentencia = $conexion->prepare('SELECT * FROM Usuarios where nombre_usu=? and password_usu=?;');
    $sentencia->execute([$usuario,$contraseña]);
    $datos = $sentencia->fetch(PDO::FETCH_OBJ);

    if($datos === FALSE){
        header('Location: login.php');
    }elseif($sentencia->rowCount() == 1){
        $_SESSION['nombre'] = $datos->nombre_usu;
        header('Location: index.php');
        
    }


?>