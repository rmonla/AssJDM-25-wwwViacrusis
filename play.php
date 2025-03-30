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
<main class="main-content">
    <section class="playlist">
        <h2 class="audio-title"><?= htmlspecialchars($audio['display_name']) ?></h2>
        
        <div class="audio-player-container">
            <audio id="audioPlayer" controls>
                <source src="serve.php?file=<?= urlencode($audio['filename']) ?>" type="audio/mpeg">
                Tu navegador no soporta el elemento de audio.
            </audio>
            <div id="autoplayMessage" class="autoplay-message">
                <p>La reproducción automática está bloqueada. Por favor haz clic en el botón de play.</p>
            </div>
        </div>
        
        <div class="audio-navigation">
            <div class="navigation-group">
                <a href="index.php?key=VCV2025" class="nav-button back-button" title="Volver a la lista completa">
                    <span class="button-icon">←</span> Volver
                </a>
            </div>
            
            <div class="navigation-group">
                <?php if ($prevAudio): ?>
                    <a href="play.php?id=<?= htmlspecialchars($prevAudio['id']) ?>" class="nav-button prev-button">
                        <span class="button-icon">⟵</span> Anterior
                    </a>
                <?php endif; ?>
                
                <?php if ($nextAudio): ?>
                    <a href="play.php?id=<?= htmlspecialchars($nextAudio['id']) ?>" class="nav-button next-button">
                        Siguiente <span class="button-icon">⟶</span>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var audio = document.getElementById('audioPlayer');
    var autoplayMessage = document.getElementById('autoplayMessage');
    
    // Intentar reproducción automática
    var playPromise = audio.play();
    
    if (playPromise !== undefined) {
        playPromise.then(_ => {
            autoplayMessage.style.display = 'none';
        })
        .catch(error => {
            // Autoplay fue bloqueado
            autoplayMessage.style.display = 'block';
            audio.controls = true;
        });
    }
    
    // Manejar cambio automático al siguiente audio al terminar
    audio.addEventListener('ended', function() {
        <?php if ($nextAudio): ?>
            window.location.href = 'play.php?id=<?= htmlspecialchars($nextAudio['id']) ?>';
        <?php endif; ?>
    });
});
</script>

<?php include 'incs/footer.php'; ?>