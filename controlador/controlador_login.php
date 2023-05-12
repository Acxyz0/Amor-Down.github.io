<?php

session_start();

if (!empty($_POST["btningresar"])){
    if (!empty($_POST["usuario"]) and !empty($_POST["password"])){
        $usuario=$_POST["usuario"];
        $password=$_POST["password"];
        $sql=$conexion->query("SELECT * FROM usuarios WHERE  usuario='$usuario' and contraseña='$password'");
        if ($datos=$sql->fetch_object()){
            $_SESSION["id"]=$datos->ID;
            $_SESSION["nombres"]=$datos->Nombres;
            $_SESSION["apellidos"]=$datos->Apellidos;

            header("location: inicio.php"); 
        }
        else{
            echo "<div>Acceso Denegado</div>";
        }

    }  
    else{
        echo "Campos Vacios";
    }
}

?>