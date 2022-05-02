<?php

$errores = "";
$enviado = "";

if (isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    if (!empty($nombre)){
        $nombre = trim($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    } else{
        $errores .= "Por favor ingrese un nombre.<br>";
    }

    if (!empty($email)){
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores .= "Por favor ingrese un mail válido. <br>";
        }

    } else{
        $errores .= "Por favor ingrese un correo electrónico.<br>";
    }

    if (!empty($mensaje)){
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = trim($mensaje);
        $mensaje = stripslashes($mensaje);
    } else{
        $errores .= "Por favor ingrese un mensaje.<br>";
    }

    if (empty($errores)){
        $enviar_a = 'matugino@gmail.com';
        $asunto = "Correo enviado desde formulario de prueba";
        $mensaje_preprado = "De: $nombre \n";
        $mensaje_preprado .= "Correo: $email \n";
        $mensaje_preprado .= "Mensaje: $mensaje";

        //mail($enviar_a, $asunto, $mensaje_preprado);
        $enviado = 'true';
    }

}