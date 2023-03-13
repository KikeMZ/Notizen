<?php
    include "conexiondb.php";
    session_start();
    $nombre = isset($_POST["Nombre"]) ? $_POST["Nombre"]: "";
    $apep = isset($_POST["Apellido_paterno"]) ? $_POST["Apellido_paterno"]: "";
    $apem = isset($_POST["Apellido_materno"]) ? $_POST["Apellido_materno"]: "";
    $user = isset($_POST["usuario"]) ? $_POST["usuario"]: "";
    $pass = isset($_POST["pass"]) ? $_POST["pass"]: "";
    $confpass = isset($_POST["confpass"]) ? $_POST["confpass"]: "";

    $sel = "SELECT Correo FROM usuario WHERE Correo = BINARY '$user'"; 
    if(($result = $conexion->query($sel)) === FALSE) {
        echo "Error: " . $sel . "<br>" . $conexion->error;      
    }

    if ($pass == $confpass) {
        if (($data = mysqli_fetch_assoc($result)) == FALSE ) {
            $sql = "INSERT INTO usuario(Nombre, Apellido_paterno, Apellido_materno, Correo, Contraseña) VALUES
            ('$nombre', '$apep', '$apem', '$user', '$pass')";
            
            if(($result = $conexion->query($sql)) === FALSE) {
                echo "Error: " . $sql . "<br>" . $conexion->error;
            }
            echo "REGISTRO EXITOSO";
        }
        else {
            echo "CORREO EXISTENTE";
        }
    }
    else {
        echo "CONTRASEÑA NO COINCIDIENTE";
    }
?>