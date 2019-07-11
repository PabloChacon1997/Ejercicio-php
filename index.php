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
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        if(empty($_POST["nombre"])){
            $nombreErr="Nombre es requerido";
        }else{
            $nombre= test_input($_POST["nombre"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $nombre)) {
                $nombreErr="Solo letras y espacios en blanco";
            }
        }
        if(empty($_POST["apellido"])){
            $nombreErr="apellido es requerido";
        }else{
            $apellido= test_input($_POST["apellido"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $nombre)) {
                $apellidoErr="Solo letras y espacios en blanco";
            }
        }
        if(empty($_POST["comentario"])){
            $comentarioErr="";
        }else{
            $comentario= test_input($_POST["comentario"]);
        }
        if(empty($_POST["genero"])){
            $generoErr="Genero es requerido";
        }else{
            $genero= test_input($_POST["genero"]);
        }

        function test_input($datos){
            $datos=trim($datos);
            $datos=stripcslashes($datos);
            return $datos;
        }
    } 
    ?>
    <h1>Ingresa los datos requeridos a continuación</h1>
    <p><span class="Error">* Campos obligatorio</span></p>
    <form method="post" action="<?php echo validar($_SERVER["index.php"])?>" >
        Nombres: <input type="text" name="nombre" value="<?php echo $nombre; ?>">
        <span class="Error">* <?php echo $nombreErr; ?></span>
        <br><br>
        Apellidos: <input type="text" name="apellido" value="<?php echo $apellido; ?>">
        <span class="Error">* <?php echo $apellidoErr; ?></span>
        <br><br>
        Comentario: <textarea name="comentario" rows="5" cols="40" <?php echo $comentario; ?>></textarea>
        <br><br>
        Género:
        <br>
        <input type="radio" name="genero" <?php if (isset($genero) && $genero=="Femenino")echo "checked"; ?> value="Femenino">Femenino
        <input type="radio" name="genero" <?php if (isset($genero) && $genero=="Masculino")echo "checked"; ?> value="Masculino">Masculino
        <input type="radio" name="genero" <?php if (isset($genero) && $genero=="Otro")echo "checked"; ?> value="Otro">Otro
        <span class="Error">* <?php echo $generoErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>