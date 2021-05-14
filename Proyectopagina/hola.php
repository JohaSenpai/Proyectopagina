<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="imagenes/logo mini.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifemage</title>
    <link href="css.css" rel="stylesheet" type="text/css">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

</head>

<body>
<div id="contenido">
    <div id="cabecera">
        <a name="arriba"></a>
    </div>
    
<div id="cabaceras">

    <div class="subindice">
        <a href="index.html">Inicio</a>
    </div>

    <div class="subindice">
        <a href="productos.html">Productos</a> <!--Incluir un despegable a ser posible -->
    </div>

    <div class="subindice">
        <a href="encargo.html">Tu encargo personalizado</a>
    </div>

    <div class="subindice">
        <a href="quienessomos.html">¿Quienes somos?</a>
    </div>

    <div class="subindice">
        <a href="contactanos.html">Contactanos</a>
    </div>

    <div id="contactiner">
    <div id="contacto">
    <?php
        echo "Hola $_POST[nombre], gracias por usar nuestros servicios. Tu pedido sera enviado a $_POST[direccion]. Los detalles del pedido, así como su localización, serán enviados a $_POST[correo]. Muchas gracias";

    ?>
    </div>
    </div>


</div>

<div id="piedepagina2">
<a  href="#arriba"> Volver arriba</a>    
</div>

<div id="piedepagina">
    <h3>Conócenos</h3>
    <a href="contactanos.html">Contacto</a><br>
    <a href="quienessomos.html">¿Quienes somos?</a><br>
    <a href="https://twitter.com/Johasenpai">Redes sociales</a><br>
    <a href="politicacookies.html">Politica de cookies</a><br>
    <a href="terminosycondiciones.html">Terminos y condiciones</a><br>
    <img src="imagenes/rss.png" height="40"><br>
</div>


</body>
</html>
