<?php
require 'incs/functions.php';

$dirMEDIA = 'media';
$file = $_GET['file'] ?? '';
$filePath = realpath($dirMEDIA . '/' . $file);

if (!$filePath || !file_exists($filePath) || pathinfo($filePath, PATHINFO_EXTENSION) !== 'mp3') {
    http_response_code(404);
    die('Archivo no encontrado.');
}

if (strpos($filePath, realpath($dirMEDIA)) !== 0) {
    http_response_code(403);
    die('Acceso denegado.');
}

header('Content-Type: audio/mpeg');
header('Content-Disposition: inline; filename="' . basename($filePath) . '"');
header('Content-Length: ' . filesize($filePath));
readfile($filePath);