<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "usuarios_orven";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orvencuack</title>
    <link rel="icon" href="orven.png">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <form method="post" class="form">
            <p class="title">Regístrate en ORVENCUACK</p>
            <p class="message">Y así no te pierdes ninguna actualización</p>
            <div class="flex">
                <label>
                    <input required placeholder="" type="text" class="input" name="Nombre">
                    <span>Nombre</span>
                </label>
                <label>
                    <input required placeholder="" type="text" class="input" name="Apellido">
                    <span>Apellido</span>
                </label>
            </div>  
            <label>
                <input required placeholder="" type="email" class="input" name="Email">
                <span>Email</span>
            </label> 
            <label>
                <input required placeholder="" type="password" class="input" name="Contraseña">
                <span>Contraseña</span>
            </label>
            <button class="submit" name="Registrate">Regístrate</button>
            <p class="signin">¿Prefieres omitir este paso? <br> <a href="orvendex.html">Da click para ingresar</a></p>
        </form>
    </div>
</body>
</html>



<?php

if (isset($_POST['Registrate'])) {
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Email = $_POST['Email'];
    $Contraseña = $_POST['Contraseña'];
    $insertarDatos ="INSERT INTO registros VALUES ('$Nombre', '$Apellido', '$Email','$Contraseña', '')";

    $ejecutarInsertar = mysqli_query($enlace,$insertarDatos);

}

?>