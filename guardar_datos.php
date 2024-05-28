<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $correo = htmlspecialchars($_POST['correo']);
    $curso = htmlspecialchars($_POST['curso']);

    $datos = "Nombre: $nombre, Correo: $correo, Curso: $curso\n";

    $archivo = fopen("inscripciones.txt", "a");
    if ($archivo) {
        fwrite($archivo, $datos);
        fclose($archivo);
        echo "Datos guardados exitosamente.";
    } else {
        echo "Error al guardar los datos.";
    }
}
?>
