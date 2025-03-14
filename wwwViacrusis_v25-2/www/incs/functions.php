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
