<?php
    include "conexiondb.php";
    session_start();
    $user = isset($_POST["usuario"]) ? $_POST["usuario"]: "";
    $pass = isset($_POST["pass"]) ? $_POST["pass"]: "";

    $sql = "SELECT Correo, Contraseña FROM usuario WHERE Correo = BINARY '$user' AND Contraseña = BINARY '$pass'"; 
    if(($result = $conexion->query($sql)) === FALSE) {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }

    if($cliente = mysqli_fetch_assoc($result)) {
        echo "Acesso Correcto <br>";
        $_SESSION["usuario"] = $user;
    }
    else {
        header('location: index.html');
    }
?>