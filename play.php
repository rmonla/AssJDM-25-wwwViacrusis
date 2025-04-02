<?php
require 'incs/functions.php';
require 'incs/audioFiles.php';
require 'incs/versionLogs.php';

// Configuración inicial
$id = $_GET['id'] ?? null;
$audio = getAudioById($id, $audioFiles);
$dirMEDIA = 'media';
$hideNavButtons = isset($_GET['wa']) && $_GET['wa'] == '1';

// Validación de archivo
if (!$audio || !file_exists($dirMEDIA . '/' . $audio['filename'])) {
    http_response_code(404);
    die('Archivo no encontrado.');
}

// Navegación entre audios
$currentIndex = array_search($audio, $audioFiles, true);
$prevAudio = $currentIndex > 0 ? $audioFiles[$currentIndex - 1] : null;
$nextAudio = $currentIndex < count($audioFiles) - 1 ? $audioFiles[$currentIndex + 1] : null;

// Generación de contenido condicional
$audio_title = htmlspecialchars($audio['display_name']);
$audio_file = htmlspecialchars($audio['filename']);

// Generación de botones de navegación
$buttons = [];
if (!$hideNavButtons) {
    if ($prevAudio) {
        $buttons[] = sprintf(
            '<a href="play.php?id=%s" class="nav-button prev-button">⟵ Anterior</a>',
            htmlspecialchars($prevAudio['id'])
        );
    }

    $buttons[] = sprintf(
        '<a href="index.php?key=VCV2025" class="nav-button back-button" title="Volver a la lista completa">← Volver</a>'
    );

    if ($nextAudio) {
        $buttons[] = sprintf(
            '<a href="play.php?id=%s" class="nav-button next-button">Siguiente ⟶</a>',
            htmlspecialchars($nextAudio['id'])
        );
    }

    $htmlBOTONEs = sprintf('<div class="audio-navigation">%s</div>', implode('', $buttons));
} else {
    $htmlBOTONEs = '';
}

// Generación de JavaScript condicional
$javascriptCode = '';
if (!$hideNavButtons) {
    $autonextScript = '';
    if ($nextAudio) {
        $autonextScript = sprintf(
            "window.location.href = 'play.php?id=%s';",
            htmlspecialchars($nextAudio['id'])
        );
    }

    $javascriptCode = sprintf(
        <<<'JS'
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var audio = document.getElementById('audioPlayer');
                var autoplayMessage = document.getElementById('autoplayMessage');
                
                // Intentar autoplay (siempre que no sea desde WhatsApp)
                var playPromise = audio.play();
                
                if (playPromise !== undefined) {
                    playPromise.then(_ => {
                        autoplayMessage.style.display = 'none';
                    }).catch(error => {
                        autoplayMessage.style.display = 'block';
                        audio.controls = true;
                    });
                }
                
                // Configurar autonext solo si hay siguiente audio
                audio.addEventListener('ended', function() {
                    document.querySelector('.audio-player-container').classList.add('ended');
                    setTimeout(() => {
                        document.querySelector('.audio-player-container').classList.remove('ended');
                        %s
                    }, 1500);
                });
            });
        </script>
        JS,
        $autonextScript
    );
}

// Construcción del HTML final
$htmlMAIN = sprintf(
    <<<'HTML'
    <main class="main-content">
        <section class="playlist">
            <h2 class="audio-title">%s</h2>
            <div class="audio-player-container">
                <audio id="audioPlayer" controls controlsList="nodownload">
                    <source src="serve.php?file=%s" type="audio/mpeg">
                    Tu navegador no soporta el elemento de audio.
                </audio>
                %s
            </div>
            %s
            %s
        </section>
    </main>
    HTML,
    $audio_title,
    $audio_file,
    (!$hideNavButtons ? '<div id="autoplayMessage" class="autoplay-message"><p>La reproducción automática está bloqueada. Por favor haz clic en el botón de play.</p></div>' : ''),
    $htmlBOTONEs,
    $javascriptCode
);

// Salida final
include 'incs/header.php';
echo $htmlMAIN;
include 'incs/footer.php';
?>