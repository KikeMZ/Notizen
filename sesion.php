<?php
    $user = isset($_POST["usuario"]) ? $_POST["usuario"]: "";
    $pass = isset($_POST["pass"]) ? $_POST["pass"]: "";

    if ($user == "root@root.com" && $pass == "toor") 
    {
        echo "Acesso Correcto";
    }
    else 
    {
        echo "Datos Erróneos";
    }
?>