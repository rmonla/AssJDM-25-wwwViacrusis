<?php
// Verificar si se ha enviado el parámetro 'parte' en la solicitud
if (isset($_GET['parte'])) {
    // Obtener el valor del parámetro 'parte'
    $parte = $_GET['parte'];

    // Directorio donde se almacenan los archivos MP3 por partes
    $directory = "./Parte$parte/";

    // Verificar si el directorio existe
    if (is_dir($directory)) {
        // Obtener la lista de archivos MP3 en el directorio
        $mp3Files = scandir($directory);
        $mp3Files = array_diff($mp3Files, array(".", ".."));

        // Crear un array para almacenar los datos de los archivos MP3
        $mp3List = array();

        // Recorrer la lista de archivos MP3 y añadirlos al array
        foreach ($mp3Files as $file) {
            if (pathinfo($file, PATHINFO_EXTENSION) === "mp3") {
                $mp3List[] = array(
                    "name" => $file,
                    "path" => $directory . $file,
                    "tit" => str_replace(array('-', '_'), ' ', str_replace('.mp3', '', $file))
                );
            }
        }

        // Devolver los datos como JSON
        header("Content-Type: application/json");
        echo json_encode($mp3List);
    } else {
        // Si el directorio no existe, devolver un mensaje de error
        header("HTTP/1.0 404 Not Found");
        echo json_encode(array("error" => "El directorio de la parte $parte no existe."));
    }
} else {
    // Si no se ha enviado el parámetro 'parte', devolver un mensaje de error
    header("HTTP/1.0 400 Bad Request");
    echo json_encode(array("error" => "Falta el parámetro 'parte' en la solicitud."));
}
?>
