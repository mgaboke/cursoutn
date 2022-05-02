<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Contacto</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vistas/css/estilos.css">
</head>
<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <?php $enviado = "";?>
            <input type="text" id="" name="nombre" placeholder="Nombre" value="<?php if (!$enviado && isset($nombre)) echo $nombre ?>">
            <input type="email" class="form-control" id="" name="email" placeholder="Correo electrónico" value="<?php if (!$enviado && isset($email)) echo $email ?>">
            <textarea name="mensaje" id="mensaje" class="form-cntrol" placeholder="Mensaje"><?php if (!$enviado && isset($mensaje)) echo $mensaje ?></textarea>

            <?php if (!empty($errores)):?>
                <div class="alert error">
                    <?php echo $errores; ?>
                </div>
            <?php elseif($enviado):?>
                <div class="alert success">
                    <p>Enviado correctamente.</p>
                </div>
            <?php endif ?>
            <input type="submit" class="btn btn-primary" value="Enviar mensaje" name="submit">
        </form>
    </div>
    <div class="fixed-header">
        <div class="container">
            Formulario de prueba
            <nav>
                <a href="index.php?ruta=registro">Home</a>
                <a href="index.php?ruta=articulos">Artículos</a>
                <a href="index.php?ruta=eventos">Eventos</a>
                <a href="index.php?ruta=aboutus">About Us</a></nav>
        </div>
    </div>
    <div class="container">
        <p> Este es un formulario de contacto de prueba realizado por Matias Gomez Acevedo. </p>
    </div>
    <?php
    if (isset($_GET["ruta"])){
        if ($_GET["ruta"] == "registro" ||
            $_GET["ruta"] == "articulos" ||
            $_GET["ruta"] == "eventos" ||
            $_GET["ruta"] == "aboutus"){
          include "paginas/" . $_GET["ruta"] . ".php";
        } else{
            include "paginas/404.php";
        }
    } else {
        include "paginas/registro.php";
    }
    ?>
</body>
</html>