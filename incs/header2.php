<?php 

function htmlHEDER($pagTIT = 'Audios del Viacrusis Viviente') {
    global $latestVersion;
    $codHTML = <<<HTML
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/style.css">
            <title>$pagTIT</title>
        </head>
        <body>
        <header class="header">
            <h1>Audios del Viacrusis Viviente</h1>
            <h2>Bº Yacampiz - 2025</h2>
            <p>Versión: <?= htmlspecialchars($latestVersion) ?> | Asociación CAMPS</p>
        </header>
HTML;
    echo $codHTML;
}
?>