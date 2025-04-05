// Función mejorada para fade out con callback garantizado
function fadeOutAudio(audioElement, callback) {
    const fadeDuration = 800; // 0.8 segundos de fade
    const fadeSteps = 20; // Pasos del fade
    const stepTime = fadeDuration / fadeSteps;
    const initialVolume = audioElement.volume;
    const stepDecrease = initialVolume / fadeSteps;
    
    // Guardar el estado original del audio
    const originalValues = {
        volume: audioElement.volume,
        playbackRate: audioElement.playbackRate
    };

    let stepsCompleted = 0;
    
    const fadeInterval = setInterval(() => {
        if (stepsCompleted < fadeSteps) {
            audioElement.volume = Math.max(0, audioElement.volume - stepDecrease);
            stepsCompleted++;
        } else {
            clearInterval(fadeInterval);
            audioElement.pause();
            // Restaurar valores originales antes de redireccionar
            audioElement.volume = originalValues.volume;
            audioElement.playbackRate = originalValues.playbackRate;
            
            // Ejecutar callback después de restaurar valores
            if (typeof callback === 'function') {
                setTimeout(callback, 100); // Pequeño retraso para asegurar
            }
        }
    }, stepTime);
}

// Función de inicialización mejorada
function initAudioPlayer() {
    const audio = document.getElementById('audioPlayer');
    const autoplayMessage = document.getElementById('autoplayMessage');
    const nextButton = document.querySelector('.next-button');
    const isLastAudio = nextButton && nextButton.dataset.isLast === 'true';
    
    // Configurar eventos de navegación con fade out
    document.querySelectorAll('.nav-button').forEach(button => {
        if (button.classList.contains('next-button') || 
            button.classList.contains('prev-button')) {
            
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const targetUrl = this.href;
                
                fadeOutAudio(audio, () => {
                    window.location.href = targetUrl;
                });
            });
        }
    });

    // Configurar autoplay y eventos
    const playPromise = audio.play();
    
    if (playPromise !== undefined) {
        playPromise.then(_ => {
            autoplayMessage.style.display = 'none';
        }).catch(error => {
            autoplayMessage.style.display = 'block';
            audio.controls = true;
        });
    }
    
    // Configurar evento de finalización con fade out
    audio.addEventListener('ended', function() {
        const playerContainer = document.querySelector('.audio-player-container');
        playerContainer.classList.add('ended');
        
        setTimeout(() => {
            playerContainer.classList.remove('ended');
            
            if (isLastAudio && window.autoNextEnabled) {
                fadeOutAudio(audio, () => {
                    window.location.href = 'play.php?id=' + nextButton.dataset.firstAudioId;
                });
            } else if (nextButton && window.autoNextEnabled) {
                fadeOutAudio(audio, () => {
                    window.location.href = nextButton.href;
                });
            }
        }, 500);
    });
    
    // Inicializar volumen
    audio.volume = 1.0;
}

// Inicializar cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', initAudioPlayer);