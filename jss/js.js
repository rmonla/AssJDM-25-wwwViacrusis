// Función para inicializar el reproductor de audio
function initAudioPlayer() {
    const audio = document.getElementById('audioPlayer');
    const autoplayMessage = document.getElementById('autoplayMessage');
    const nextButton = document.querySelector('.next-button');
    const isLastAudio = nextButton && nextButton.dataset.isLast === 'true';
    
    // Intentar autoplay (siempre que no sea desde WhatsApp)
    const playPromise = audio.play();
    
    if (playPromise !== undefined) {
        playPromise.then(_ => {
            autoplayMessage.style.display = 'none';
        }).catch(error => {
            autoplayMessage.style.display = 'block';
            audio.controls = true;
        });
    }
    
    // Configurar comportamiento al terminar la reproducción
    audio.addEventListener('ended', function() {
        const playerContainer = document.querySelector('.audio-player-container');
        playerContainer.classList.add('ended');
        
        setTimeout(() => {
            playerContainer.classList.remove('ended');
            
            if (isLastAudio) {
                // Cambiar el botón "Siguiente" por "Iniciar nuevamente"
                if (nextButton) {
                    nextButton.textContent = 'Iniciar nuevamente';
                    nextButton.href = 'play.php?id=' + nextButton.dataset.firstAudioId;
                }
                
                // Volver al primer audio si está configurado el autoNext
                if (window.autoNextEnabled) {
                    window.location.href = 'play.php?id=' + nextButton.dataset.firstAudioId;
                }
            } else if (nextButton) {
                // Navegar al siguiente audio si no es el último
                window.location.href = nextButton.href;
            }
        }, 500);
    });
}

// Inicializar cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', initAudioPlayer);