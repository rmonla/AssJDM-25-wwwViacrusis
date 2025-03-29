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
