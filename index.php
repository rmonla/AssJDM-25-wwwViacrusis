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
            ?>
                <li class="song-item <?= $isActive ? 'active' : '' ?>">
                    <a href="play.php?id=<?= htmlspecialchars($audio['id']) ?>" class="song-link">
                        <?= htmlspecialchars($audio['display_name']) ?>
                    </a>
                    <?php if (!empty($audio['short_url'])): ?>
                        <a href="https://wa.me/?text=<?= urlencode($audio['display_name'] . "\n" . $audio['short_url'] . "\nVia Crusis Viviente 2025") ?>" target="_blank">
                            <img src="assets/whatsapp-icon.png" alt="Compartir" class="icon-whatsapp">
                        </a>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
</main>
<?php include 'incs/footer.php'; ?>