# Código Fuente Recolectado

## ../../css/style.css


```css
/* ===== ESTILOS BASE ===== */
body {
    font-family: 'Georgia', serif;
    margin: 0;
    padding: 0;
    background: linear-gradient(to bottom, #fdf7e3, #e9d8b7);
    color: #4a3e31;
    text-align: center;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    overflow-x: hidden;
}

/* ===== HEADER COMPACTO ===== */
.header {
    background-color: #806d5a;
    padding: 12px 15px;
    color: #fff;
    text-shadow: 1px 1px 4px #000;
    position: sticky;
    top: 0;
    z-index: 100;
    flex-shrink: 0;
    width: 100%;
    box-sizing: border-box;
}

.header h1 {
    margin: 0;
    font-size: 1.3em;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

/* ===== LISTA DE REPRODUCCIÓN ===== */
.playlist {
    background-color: #f9f4ef;
    border: 2px solid #806d5a;
    border-radius: 8px;
    padding: 15px;
    margin: 10px auto;
    width: 90%;
    max-width: 600px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    flex: 1;
    display: flex;
    flex-direction: column;
    box-sizing: border-box;
}

#song-list {
    list-style: none;
    padding: 0;
    margin: 0;
    width: 100%;
}

.song-item {
    padding: 12px 15px;
    border-bottom: 1px solid #ddd;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: all 0.3s ease;
    background-color: #f9f4ef;
    box-sizing: border-box;
}

.song-item:hover {
    background-color: #f0e6d2;
    transform: translateX(5px);
}

.song-item.active {
    background-color: #e0d0a7;
    transform: translateX(8px);
    box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
}

.song-link {
    text-decoration: none;
    color: #4a3e31;
    font-weight: bold;
    transition: color 0.3s ease;
}

.song-link:hover {
    color: #806d5a;
    text-decoration: underline;
}

.song-actions {
    display: flex;
    gap: 10px;
}

.song-actions a {
    text-decoration: none;
    font-size: 1.2em;
}

.icon-whatsapp {
    width: 24px;
    height: 24px;
    cursor: pointer;
    transition: transform 0.2s;
}

.icon-whatsapp:hover {
    transform: scale(1.2);
}

/* ===== REPRODUCTOR ===== */
.audio-player-container {
    width: 100%;
    max-width: 100%;
    margin: 15px auto;
    padding: 0;
    flex-shrink: 0;
    overflow: hidden;
    box-sizing: border-box;
}

.audio-title {
    margin-top: 5px;
    margin-bottom: 5px;
}

audio {
    width: 100%;
    min-width: 100%;
    height: 50px;
    background-color: #f9f4ef;
    border-radius: 8px;
    box-sizing: border-box;
}

/* Controles del reproductor */
audio::-webkit-media-controls-panel {
    background-color: #f9f4ef;
    border-radius: 8px;
    width: 100%;
    display: flex;
    flex-wrap: nowrap;
}

audio::-webkit-media-controls-current-time-display,
audio::-webkit-media-controls-time-remaining-display {
    font-family: 'Georgia', serif;
}

/* ===== BOTONES ===== */
.audio-navigation {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 10px;
    width: 100%;
    padding-top: 15px;
}

.navigation-group {
    display: flex;
    gap: 10px;
}

.nav-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 6px 12px;
    font-size: 13px;
    color: #4a3e31;
    background-color: #e9d8b7;
    border: 1px solid #806d5a;
    border-radius: 20px;
    text-align: center;
    text-decoration: none;
    transition: all 0.3s ease;
    width: auto;
    min-width: 80px;
    max-width: 250px;
    box-shadow: 0 2px 3px rgba(0,0,0,0.1);
}

.nav-button:hover {
    background-color: #f9f4ef;
    color: #806d5a;
    box-shadow: 0 3px 6px rgba(0,0,0,0.15);
}

/* ===== FOOTER ===== */
.footer {
    margin-top: auto;
    padding: 10px;
    background-color: #806d5a;
    color: #fff;
    font-size: 12px;
    text-align: center;
    flex-shrink: 0;
}

/* ===== MODO OSCURO ===== */
@media (prefers-color-scheme: dark) {
    body {
        background: linear-gradient(to bottom, #3a3229, #2a241e);
        color: #f0e6d2;
    }
    .playlist,
    audio::-webkit-media-controls-panel {
        background-color: #2a241e;
    }
    .song-link {
        color: #ac9f84;
    }
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
    .playlist {
        width: 95%;
    }
    .nav-button {
        padding: 7px 10px;
        font-size: 13px;
    }
}

@media (max-width: 480px) {
    .playlist {
        width: 100%;
        padding: 10px;
    }
    .nav-button {
        width: 100%;
        padding: 6px 8px;
        font-size: 12px;
    }
}
```

## ../../index.php


```php
<?php

// http://rmnot:32768/?key=VCV2025

// https://dns.frlr.utn.edu.ar/wwwVCV/?key=VCV2025
// https://bit.ly/4kAW9aj
// http://0.0.0.0:32768/?key=VCV2025

require 'incs/functions.php';
require 'incs/audioFiles.php';
require 'incs/versionLogs.php';

if (!isset($_GET['key']) || $_GET['key'] !== 'VCV2025') {
    header('Location: error.php');
    exit();
}

$baseURL = getBaseURL();
include 'incs/header.php';
?>

<main class="main-content">
    <section class="playlist">
        <h3>Lista de Audios</h3>
        <ul id="song-list">
            <?php foreach ($audioFiles as $audio): 
                $isActive = (isset($_GET['id']) && $_GET['id'] === $audio['id']);
                $audioURL = getBaseURL() . "/play.php?id=" . urlencode($audio['id']) . "&wa=1";
            ?>
                <li class="song-item <?= $isActive ? 'active' : '' ?>">
                    <a href="play.php?id=<?= htmlspecialchars($audio['id']) ?>" class="song-link">
                        <?= htmlspecialchars($audio['display_name']) ?>
                    </a>
                    
                    <div class="song-actions">
                        <!-- Botón de descarga -->
                        <a href="serve.php?file=<?= urlencode($audio['filename']) ?>" download="<?= htmlspecialchars($audio['filename']) ?>">
                            📥
                        </a>

                        <!-- Botón de compartir en WhatsApp -->
                        <a href="https://wa.me/?text=<?= urlencode($audio['display_name'] . "\n" . $audioURL) ?>" target="_blank">
                            <img src="assets/whatsapp-icon.png" alt="WhatsApp" class="icon-whatsapp">
                        </a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
</main>


<?php include 'incs/footer.php'; ?>
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

$currentIndex = array_search($audio, $audioFiles, true);
$prevAudio = $currentIndex > 0 ? $audioFiles[$currentIndex - 1] : null;
$nextAudio = $currentIndex < count($audioFiles) - 1 ? $audioFiles[$currentIndex + 1] : null;

include 'incs/header.php';
?>

<?php
// Verificar si la reproducción viene de WhatsApp (ocultar "volver")
$hideNavButtons = isset($_GET['wa']) && $_GET['wa'] == '1';
?>

<main class="main-content">
    <section class="playlist">
        <h2 class="audio-title"><?= htmlspecialchars($audio['display_name']) ?></h2>
        
        <div class="audio-player-container">
            <audio id="audioPlayer" controls controlsList="nodownload">
                <source src="serve.php?file=<?= urlencode($audio['filename']) ?>" type="audio/mpeg">
                Tu navegador no soporta el elemento de audio.
            </audio>
            <div id="autoplayMessage" class="autoplay-message">
                <p>La reproducción automática está bloqueada. Por favor haz clic en el botón de play.</p>
            </div>
        </div>

        <?php if (!$hideNavButtons): ?>
            <div class="audio-navigation">
                <a href="index.php?key=VCV2025" class="nav-button back-button" title="Volver a la lista completa">
                    ← Volver
                </a>
                <?php if ($prevAudio): ?>
                    <a href="play.php?id=<?= htmlspecialchars($prevAudio['id']) ?>" class="nav-button prev-button">
                        ⟵ Anterior
                    </a>
                <?php endif; ?>
                <?php if ($nextAudio): ?>
                    <a href="play.php?id=<?= htmlspecialchars($nextAudio['id']) ?>" class="nav-button next-button">
                        Siguiente ⟶
                    </a>
                    <?php endif; ?>
            </div>
        <?php endif; ?>
    </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var audio = document.getElementById('audioPlayer');
    var autoplayMessage = document.getElementById('autoplayMessage');
    
    var playPromise = audio.play();
    
    if (playPromise !== undefined) {
        playPromise.then(_ => {
            autoplayMessage.style.display = 'none';
        })
        .catch(error => {
            autoplayMessage.style.display = 'block';
            audio.controls = true;
        });
    }
    
    audio.addEventListener('ended', function() {
        document.querySelector('.audio-player-container').classList.add('ended');
        setTimeout(() => {
            document.querySelector('.audio-player-container').classList.remove('ended');
            <?php if ($nextAudio): ?>
                window.location.href = 'play.php?id=<?= htmlspecialchars($nextAudio['id']) ?>';
            <?php endif; ?>
        }, 1500);
    });
});
</script>

<?php include 'incs/footer.php'; ?>
```

## ../../serve.php


```php
<?php
require 'incs/functions.php';

$dirMEDIA = 'media';
$file = $_GET['file'] ?? '';
$filePath = realpath($dirMEDIA . '/' . $file);

// Validaciones de seguridad
if (!$filePath || !file_exists($filePath) || pathinfo($filePath, PATHINFO_EXTENSION) !== 'mp3') {
    http_response_code(404);
    die('Archivo no encontrado.');
}

if (strpos($filePath, realpath($dirMEDIA)) !== 0) {
    http_response_code(403);
    die('Acceso denegado.');
}

// Configurar headers para soportar range requests
$fileSize = filesize($filePath);
$fileTime = filemtime($filePath);

header('Content-Type: audio/mpeg');
header('Accept-Ranges: bytes');
header('Content-Length: ' . $fileSize);
header('Last-Modified: ' . gmdate('D, d M Y H:i:s', $fileTime) . ' GMT');
header('Cache-Control: no-cache');

// Manejar range requests (para saltar en el audio)
if (isset($_SERVER['HTTP_RANGE'])) {
    $range = $_SERVER['HTTP_RANGE'];
    $range = str_replace('bytes=', '', $range);
    $range = explode('-', $range);
    
    $start = (int)$range[0];
    $end = $fileSize - 1;
    
    if (!empty($range[1])) {
        $end = (int)$range[1];
    }
    
    $length = $end - $start + 1;
    
    header('HTTP/1.1 206 Partial Content');
    header('Content-Range: bytes ' . $start . '-' . $end . '/' . $fileSize);
    header('Content-Length: ' . $length);
    
    // Leer y enviar la parte solicitada del archivo
    $file = fopen($filePath, 'rb');
    fseek($file, $start);
    
    $remaining = $length;
    while ($remaining > 0) {
        $chunk = min(8192, $remaining);
        echo fread($file, $chunk);
        $remaining -= $chunk;
        flush();
    }
    
    fclose($file);
} else {
    // Enviar el archivo completo si no hay range request
    readfile($filePath);
}
exit();
?>
```

