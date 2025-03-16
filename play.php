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
