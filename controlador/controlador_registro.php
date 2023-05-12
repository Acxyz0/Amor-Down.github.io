<?php

if (!empty($_POST['btnregistrar'])){
    if(empty($_POST['nombre_usuario']) or empty($_POST['apellido_usuario']) or empty($_POST['r_usuario']) or empty($_POST['contraseña_usuario'])or empty($_POST['rol_usuario'])){
        echo '<div class"alerta">Uno de los campos de registro esta vacio</div>';
    }
    else{
        $nombres=$_POST['nombre_usuario'];
        $apellidos=$_POST['apellido_usuario'];
        $usuario=$_POST['r_usuario'];
        $password=$_POST['contraseña_usuario'];
        $rol=$_POST['rol_usuario'];
        $sql=$conexion->query("INSERT INTO usuarios (Nombres, Apellidos, Usuario, Contraseña,Rol) values ('$nombres', '$apellidos', '$usuario', '$password','$rol')");
        if($sql==1){
            echo '<div class"alerta">Usuario Registrado Correctamente</div>';
        }
        else{
            echo '<div class"alerta">Error al  registrar</div>';
        }
    }
}

?>