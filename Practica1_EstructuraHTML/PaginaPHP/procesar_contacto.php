
<?php
include "db_conection.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Contacto</title>
</head>
<body>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $nombre = trim($_POST["nombre"] ?? "");
    $correo = trim($_POST["correo"] ?? "");
    $asunto = trim($_POST["asunto"] ?? "");
    $mensaje = trim($_POST["mensaje"] ?? "");

    
    if ($nombre == "" || $correo == "" ||
        $asunto == "" || $mensaje == "") {

        echo "Error: todos los campos son obligatorios.";

    } elseif (
        strlen($nombre) > 100 ||
        strlen($correo) > 100 ||
        strlen($asunto) > 150
    ) {

        echo "Error: un campo supera la longitud permitida.";

    } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {

        echo "Error: el correo electrónico no es válido.";

    } else {

        
        $sql = "INSERT INTO contactos
                (nombre, correo, asunto, mensaje)
                VALUES (?, ?, ?, ?)";

        $consulta = $conn->prepare($sql);

        if ($consulta === false) {

            echo "Error al preparar la consulta.";

        } else {

            
            $consulta->bind_param(
                "ssss",
                $nombre,
                $correo,
                $asunto,
                $mensaje
            );

            
            if ($consulta->execute()) {
                echo "<h1>Mensaje guardado correctamente.</h1>";
            } else {
                echo "Error al guardar el mensaje.";
            }

            $consulta->close();
        }
    }

} else {

    echo "Acceso no permitido.";

}

$conn->close();

?>

<br><br>

<!-- Regresar al formulario -->
<a href="../index.html">
    <button type="button">Regresar al formulario</button>
</a>

</body>
</html>
