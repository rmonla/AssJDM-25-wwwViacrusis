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