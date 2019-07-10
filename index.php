<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>Formulario</title>
</head>
<body>
    <?php 
    $nombreErr=$apellidoErr=$generoErr=$comentarioErr="";
    $nombre=$apellido=$genero=$comentario="";
    ?>
    <h1>Ingresa los datos requeridos a continuación</h1>
    <p><span class="Error">* Campos obligatorio</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nombres: <input type="text" name="nombre" value="<?php echo $nombre; ?>">
        <span class="Error">* <?php echo $nombreErr; ?></span>
        <br><br>
        Appelidos: <input type="text" name="apellido" value="<?php echo $apellido; ?>">
        <span class="Error">* <?php echo $apellidoErr; ?></span>
        <br><br>
        Comentario: <textarea name="comentario" rows="5" cols="40" <?php echo $comentario; ?>></textarea>
        <br><br>
        Género:
        <br>
        <input class="gen" type="radio" name="genero" <?php if (isset($genero) && $genero=="Femenino")echo "checked"; ?> value="femenino">Femenino
        <input type="radio" name="genero" <?php if (isset($genero) && $genero=="Masculino")echo "checked"; ?> value="femenino">Masculino
        <input type="radio" name="genero" <?php if (isset($genero) && $genero=="Otro")echo "checked"; ?> value="femenino">Otro
        <span class="Error">* <?php echo $generoErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Guardar">
    </form>
</body>
</html>