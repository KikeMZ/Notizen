<?php
    session_start();
    if(isset($_SESSION["usuario"]))
    {
        /*if ($_SESSION["usuario"] != $user) 
        {
            header("location: login.php");
        }*/
    }
    else 
    {
        header("location: login.php");
    }
?>