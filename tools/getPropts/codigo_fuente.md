# Código Fuente Recolectado

## ../../css/style.css

```css
/* General */
body {
    font-family: 'Georgia', serif;
    margin: 0;
    background: linear-gradient(to bottom, #fdf7e3, #e9d8b7);
    color: #4a3e31;
    text-align: center;
}

/* Header */
.header {
    background-color: #806d5a;
    padding: 20px;
    color: #fff;
    text-shadow: 1px 1px 4px #000;
}

.header h1, .header h2, .header p {
    margin: 5px;
}

/* Playlist */
.playlist {
    margin: auto;
    width: 80%;
    border: 2px solid #806d5a;
    background: #f9f4ef;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

.song-item {
    list-style: none;
    padding: 10px;
    border-bottom: 1px solid #ddd;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.song-link {
    text-decoration: none;
    color: #4a3e31;
    font-weight: bold;
}

.song-link:hover {
    text-decoration: underline;
    color: #806d5a;
}

/* WhatsApp Icon */
.icon-whatsapp {
    width: 24px;
    height: 24px;
    cursor: pointer;
    transition: transform 0.2s;
}

.icon-whatsapp:hover {
    transform: scale(1.2);
}

/* Audio Player */
audio {
    margin-top: 20px;
}

/* Navigation Buttons */
.navigation-buttons {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-top: 20px;
}

.navigation-buttons a {
    display: inline-block;
    padding: 8px 15px;
    font-size: 14px;
    color: #4a3e31;
    background-color: #e9d8b7;
    border: 1px solid #806d5a;
    border-radius: 20px;
    text-decoration: none;
    transition: background-color 0.3s, transform 0.2s, color 0.3s;
}

.navigation-buttons a:hover {
    background-color: #f9f4ef;
    color: #806d5a;
}

.navigation-buttons a:active {
    background-color: #fdf7e3;
    color: #4a3e31;
    transform: translateY(1px);
}

.btn-prev {
    background-color: #e9d8b7; /* Botón "Anterior" más tenue */
}

.btn-prev:hover {
    background-color: #f9f4ef;
}

.btn-prev:active {
    background-color: #fdf7e3;
}

.btn-next {
    background-color: #e9d8b7; /* Botón "Siguiente" más tenue */
}

.btn-next:hover {
    background-color: #f9f4ef;
}

.btn-next:active {
    background-color: #fdf7e3;
}

/* Footer */
.footer {
    margin-top: 30px;
    padding: 10px;
    background-color: #806d5a;
    color: #fff;
    font-size: 14px;
}
```

## ../../incs/audioFiles.php

```php
<?php
// Array de archivos de audio (debería centralizarse si es muy grande)
$audioFiles = [
[
    'filename' => '101_v2502_La_entrada_de_Jesús_en_Jerusalén.mp3',
    'display_name' => '101 - La entrada de Jesús en Jerusalén',
    'id' => '101_v2502', 'order' => '0102', 'short_url' => '',
],
[
    'filename' => '102_v2502_El_Trato_de_Judas_y_Caifás.mp3',
    'display_name' => '102 - El Trato de Judas y Caifás',
    'id' => '102_v2502', 'order' => '0103', 'short_url' => '',
],
[
    'filename' => '103_v2508_La_Última_Cena_Adeje16+Aguas+Monedas.mp3',
    'display_name' => '103 - La Última Cena',
    'id' => '103_v2508', 'order' => '0104', 'short_url' => '',
],
[
    'filename' => '104_v2502_La_oración_en_el_Monte_de_los_Olivos.mp3',
    'display_name' => '104 - La oración en el Monte de los Olivos',
    'id' => '104_v2502', 'order' => '0105', 'short_url' => '',
],
[
    'filename' => '105_v2503_La_Entrega+MúsicaFinal.mp3',
    'display_name' => '105 - La Entrega',
    'id' => '105_v2503', 'order' => '0106', 'short_url' => '',
],
[
    'filename' => '106_v2503_Las_negaciones_de_Pedro+MusicaAlInicio.mp3',
    'display_name' => '106 - Las negaciones de Pedro',
    'id' => '106_v2503', 'order' => '0107', 'short_url' => '',
],
[
    'filename' => '107_v2502_El_juicio_en_el_Sanedrín.mp3',
    'display_name' => '107 - El juicio en el Sanedrín',
    'id' => '107_v2502', 'order' => '0108', 'short_url' => '',
],
[
    'filename' => '108_v2502_La_Culpa_de_Judas.mp3',
    'display_name' => '108 - La Culpa de Judas',
    'id' => '108_v2502', 'order' => '0109', 'short_url' => '',
],
[
    'filename' => '109_v2502_El_lavado_de_las_manos_de_Pilatos.mp3',
    'display_name' => '109 - El lavado de las manos de Pilatos',
    'id' => '109_v2502', 'order' => '0110', 'short_url' => '',
],
[
    'filename' => '110_v2502_Jesús_Ante_Herodes.mp3',
    'display_name' => '110 - Jesús Ante Herodes',
    'id' => '110_v2502', 'order' => '0111', 'short_url' => '',
],
[
    'filename' => '111_v2502_1ºE_Jesús_es_condenado_a_muerte.mp3',
    'display_name' => '111 - 1ºE - Jesús es condenado a muerte',
    'id' => '111_v2502', 'order' => '0112', 'short_url' => '',
],
[
    'filename' => '201_v2592_2ºE_Jesús_carga_con_la_cruz.mp3',
    'display_name' => '201 - 2ºE - Jesús carga con la cruz',
    'id' => '201_v2592', 'order' => '0201', 'short_url' => '',
],
[
    'filename' => '202_v2502_3ºE_Jesús_cae_por_primera_vez.mp3',
    'display_name' => '202 - 3ºE - Jesús cae por primera vez',
    'id' => '202_v2502', 'order' => '0202', 'short_url' => '',
],
[
    'filename' => '203_v2502_4ºE_Jesús_se_encuentra_con_su_madre.mp3',
    'display_name' => '203 - 4ºE - Jesús se encuentra con su madre',
    'id' => '203_v2502', 'order' => '0203', 'short_url' => '',
],
[
    'filename' => '204_v2502_5ºE_Simón_de_Cirene_ayuda_a_Jesús_a_llevar_la_cruz.mp3',
    'display_name' => '204 - 5ºE - Simón de Cirene ayuda a Jesús a llevar la cruz',
    'id' => '204_v2502', 'order' => '0204', 'short_url' => '',
],
[
    'filename' => '205_v2502_6ºE_La_Verónica_enjuga_el_rostro_de_Jesús.mp3',
    'display_name' => '205 - 6ºE - La Verónica enjuga el rostro de Jesús',
    'id' => '205_v2502', 'order' => '0205', 'short_url' => '',
],
[
    'filename' => '206_v2502_7ºE_Jesús_cae_por_segunda_vez.mp3',
    'display_name' => '206 - 7ºE - Jesús cae por segunda vez',
    'id' => '206_v2502', 'order' => '0206', 'short_url' => '',
],
[
    'filename' => '207_v2502_8ºE_Jesús_consuela_a_las_mujeres_de_Jerusalén.mp3',
    'display_name' => '207 - 8ºE - Jesús consuela a las mujeres de Jerusalén',
    'id' => '207_v2502', 'order' => '0207', 'short_url' => '',
],
[
    'filename' => '301_v2502_9ºE_Jesús_cae_por_tercera_vez.mp3',
    'display_name' => '301 - 9ºE - Jesús cae por tercera vez',
    'id' => '301_v2502', 'order' => '0301', 'short_url' => '',
],
[
    'filename' => '302_v2502_10ºE_Jesús_es_despojado_de_sus_vestiduras.mp3',
    'display_name' => '302 - 10ºE - Jesús es despojado de sus vestiduras',
    'id' => '302_v2502', 'order' => '0302', 'short_url' => '',
],
[
    'filename' => '303_v2502_11ºE_Jesús_es_clavado_en_la_cruz.mp3',
    'display_name' => '303 - 11ºE - Jesús es clavado en la cruz',
    'id' => '303_v2502', 'order' => '0303', 'short_url' => '',
],
[
    'filename' => '304_v2503_12ºE_Jesús_muere_en_la_cruz.mp3',
    'display_name' => '304 - 12ºE - Jesús muere en la cruz',
    'id' => '304_v2502', 'order' => '0304', 'short_url' => '',
],
[
    'filename' => '305_v2502_13ºE_Jesús_es_bajado_de_la_cruz_y_entregado_a_su_madre.mp3',
    'display_name' => '305 - 13ºE - Jesús es bajado de la cruz y entregado a su madre',
    'id' => '305_v2502', 'order' => '0305', 'short_url' => '',
],
[
    'filename' => '306_v2502_14ºE_Jesús_es_colocado_en_el_sepulcro.mp3',
    'display_name' => '306 - 14ºE - Jesús es colocado en el sepulcro',
    'id' => '306_v2502', 'order' => '0306', 'short_url' => '',
],
[
    'filename' => '307_v2502_La_Puerta_de_Piedra.mp3',
    'display_name' => '307 - La Puerta de Piedra',
    'id' => '307_v2502', 'order' => '0307', 'short_url' => '',
],
[
    'filename' => '308_v2502_El_Sepulcro.mp3',
    'display_name' => '308 - El Sepulcro',
    'id' => '308_v2502', 'order' => '0308', 'short_url' => '',
],
[
    'filename' => '309_v2502_El_Anuncio_de_la_Resurección.mp3',
    'display_name' => '309 - El Anuncio de la Resurección',
    'id' => '309_v2502', 'order' => '0309', 'short_url' => '',
],
[
    'filename' => '199_v2501_1ºP_Todo_UNIDO.mp3',
    'display_name' => '199 - Todo UNIDO',
    'id' => '199_v2501', 'order' => '0199', 'short_url' => '',
],
[
    'filename' => '300_v2501_3ºP_Todo_UNIDO.mp3',
    'display_name' => '300 - Todo UNIDO',
    'id' => '300_v2501', 'order' => '0300', 'short_url' => '',
],
];```

## ../../incs/footer.php

```php
<footer class="footer">
    <p>Propiedad de Asociación CAMPS | Inspirado en la fe y la música</p>
</footer>
</body>
</html>
```

## ../../incs/functions.php

```php
<?php
function getBaseURL() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
    $host = $_SERVER['HTTP_HOST'];
    $path = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    return $protocol . "://" . $host . $path;
}

function getAudioById($id, $audioFiles) {
    foreach ($audioFiles as $audio) {
        if ($audio['id'] == $id) {
            return $audio;
        }
    }
    return null;
}
```

## ../../incs/header.php

```php
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Audios del Viacrusis Viviente</title>
</head>
<body>
<header class="header">
    <h1>Audios del Viacrusis Viviente</h1>
    <h2>Bº Yacampiz - 2025</h2>
    <p>Versión: <?= htmlspecialchars($latestVersion) ?> | Asociación CAMPS</p>
</header>
```

## ../../incs/index.php

```php
<?php include 'kerberos.php'; ?>```

## ../../incs/kerberos.php

```php
<?php
// Verificar si se pasa el parámetro 'key' con el valor 'VCV2025'
if (!isset($_GET['key']) || $_GET['key'] !== 'VCV2025') {
    header('Location: error.php');
    exit();
}
?>
<?php include 'header.php'; ?>
    <main class="main-content">
        <p>Contenido protegido accesible solo con la clave correcta.</p>
    </main>
<?php include 'footer.php'; ?>

```

## ../../incs/versionLogs.php

```php
<?php
$versionLogs = [
    '25.4' => [
        'date' => '2025-03-24',
        'changes' => [
            'Modifica La Negacion, agrega música al inicio.',
            'Modifica La Entrega, agrega música al final.',
            'Modifica Última Cena, agrega Aguas+Monedas-tiempos.',
            'Agrega en tools el script para renombrar los archivos usando base de datos.',
            ],
        ],

    '25.3' => [
        'date' => '2025-03-24',
        'changes' => [
            'Renombra archivos de audio 1ra parte a la forma XXXv25-X_...',
            'Actualiza Ultima Cena y agrega Lavado de pies.',
            'Genera Video Viral 2025',
            'Upload Todo Unido 1º y 3º parte',
            'Actualiza nueva key.',
            ],
        ],
    '25.2' => [
        'date' => '2025-03-16',
        'changes' => [
            'Actualiza valores de Titulos a Viacrusus 2025.',
            ],
        ],
    '25.1' => [
        'date' => '2025-03-10',
        'changes' => [
            'Se genera y actualiza a la nueva notacion de versionado del 5.6 a 25.1.',
            ],
        ],
    '5.6' => [
        'date' => '2025-03-25',
        'changes' => [
            'www/: Se re organiza carpetas para separar la configuración docker con la página.',
            'docker-compose: Se optimiza para que tome la ultima version de php:samba.',
            ],
        ],
    '5.5.5' => [
        'date' => '2025-02-08',
        'changes' => [
            'Test de nueva bdAudios.',
            ],
        ],
    '5.5.4' => [
        'date' => '2025-01-23',
        'changes' => [
            'Mejora la visualización del código del array audioFiles.',
            'Traslada el archivo versionLogs al directorio includes.',
            'Crea kerberos.php para prevenir la exposición accidental de archivos del directorio.',
            'Modifica y añade archivos index.php en cada directorio para reforzar la seguridad.',
            ],
        ],
    '5.5.3' => [
            'date' => '2024-12-22',
            'changes' => [
                'Reorganización de archivos y directorios, trasladándolos de la carpeta "src" a la raíz del sitio.',
                'Creación de la herramienta "Ver Versiones" (tools/verVersiones.php) para mostrar el historial de cambios.',
                'Incorporación de los botones "Anterior" y "Siguiente" en (play.php) para una navegación más intuitiva.',
                'Modificación de estilos para mejorar la apariencia de los botones (css/style.css).',
                'Separación de las cabeceras y pies de página para incluirlos de forma independiente (include/header.php y include/footer.php).',
                'Actualización de index.php y play.php para utilizar include/header.php e include/footer.php.'
            ],
        ],
    '5.5.2' => [
        'date' => '2024-12-22',
        'changes' => [
            'Actualización de cambios y detalles de versiones.',
            'Creación del *Historial de Versiones* (versionLogs.php).',
            'Actualización del audio "PCVBY1005_v2.mp3", agregando música de peregrinación de ángeles para mejorar el final.',
            'Modificación de IDs, nombres de archivos de audio y nombres para mostrar (audioFiles.php).',
        ],
    ],
    '5.5.1' => [
        'date' => '2024-12-22',
        'changes' => [
            ' FALTA CARAGAR',
        ],
    ],
    '5.4.3' => [
        'date' => '2024-12-21',
        'changes' => [
            'Mejoras significativas en la apariencia de la interfaz.',
            'Uso de JavaScript para una experiencia de usuario más interactiva.',
            'Diseño moderno con estilos avanzados.',
        ],
    ],
    '5.4.2' => [
        'date' => '2024-12-19',
        'changes' => [
            'Mejoras en la seguridad del sistema.',
            'Ocultación de la dirección física de los archivos .mp3 mediante el uso de serve.php.',
            'Validación de la existencia de archivos antes de servirlos.',
        ],
    ],
    '5.4.1' => [
        'date' => '2024-12-15',
        'changes' => [
            'Versión inicial del proyecto.',
            'Funcionalidad básica para listar y reproducir archivos .mp3.',
        ],
    ],
];

// Ordena las claves del array en orden descendente
uksort($versionLogs, 'version_compare');
$latestVersion = array_key_last($versionLogs);
$latestDetails = $versionLogs[$latestVersion];
?>
```

## ../../index.php

```php
<?php

// http://rmnot:32768/?key=VCV2025

// https://dns.frlr.utn.edu.ar/wwwVCV/?key=VCV2025
// https://bit.ly/4kAW9aj
// http://0.0.0.0:32768/?key=VCV2025


require 'incs/functions.php';
require 'incs/audioFiles.php'; // Importamos el array centralizado
require 'incs/versionLogs.php';

// Verificar si se pasa el parámetro 'key' con el valor 'VCV2025'
if (!isset($_GET['key']) || $_GET['key'] !== 'VCV2025') {
    // Redirigir a otra página (por ejemplo, 'error.php')
    header('Location: error.php');
    exit(); // Detener la ejecución para evitar que se cargue el contenido de esta página
}

// Definir variables globales
$baseURL = getBaseURL(); // Cargar automáticamente la URL base
include 'incs/header.php';
// include 'incs/header2.php'; // Incluir cabecera2
// htmlHEDER();

?>
<main class="main-content">
    <section class="playlist">
        <h3>Lista de Audios</h3>
        <ul id="song-list">
            <?php foreach ($audioFiles as $audio): ?>
                <li class="song-item">
                    <a href="play.php?id=<?= htmlspecialchars($audio['id']) ?>" class="song-link">
                        <?= htmlspecialchars($audio['display_name']) ?>
                    </a>
                <?php if (!empty($audio['short_url'])): ?>
                    <a href="https://wa.me/?text=<?= urlencode($audio['display_name'] . "\n" . $audio['short_url'] . "\nPesebre Viviente del Bº Yacampiz") ?>" target="_blank" rel="noopener noreferrer">
                        <img src="https://cdn-icons-png.flaticon.com/512/124/124034.png" alt="WhatsApp" class="icon-whatsapp">
                    </a>
                <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
</main>
<?php include 'incs/footer.php'; // Incluir pie de página ?>
```

## ../../play.php

```php
<?php
require 'incs/functions.php';
require 'incs/audioFiles.php';
require 'incs/versionLogs.php';

$id = $_GET['id'] ?? null;
$audio = getAudioById($id, $audioFiles);
$dirMEDIA = 'media';

if (!$audio || !file_exists($dirMEDIA . '/' . $audio['filename'])) {
    http_response_code(404);
    die('Archivo no encontrado.');
}

// Obtener índices del audio actual y calcular los índices del siguiente y anterior
$currentIndex = array_search($audio, $audioFiles, true);
$prevAudio = $currentIndex > 0 ? $audioFiles[$currentIndex - 1] : null;
$nextAudio = $currentIndex < count($audioFiles) - 1 ? $audioFiles[$currentIndex + 1] : null;

include 'incs/header.php'; // Incluir cabecera
?>
<main class="main-content">
    <section class="playlist">
        <h2><?= htmlspecialchars($audio['display_name']) ?></h2>
        <audio controls>
            <source src="serve.php?file=<?= urlencode($audio['filename']) ?>" type="audio/mpeg">
            Tu navegador no soporta el elemento de audio.
        </audio>
        <div class="navigation-buttons">
            <?php if ($prevAudio): ?>
                <a href="play.php?id=<?= htmlspecialchars($prevAudio['id']) ?>" class="btn-prev">⟵ Anterior</a>
            <?php endif; ?>
            <?php if ($nextAudio): ?>
                <a href="play.php?id=<?= htmlspecialchars($nextAudio['id']) ?>" class="btn-next">Siguiente ⟶</a>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php include 'incs/footer.php'; // Incluir pie de página ?>
```

## ../../serve.php

```php
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
readfile($filePath);```

