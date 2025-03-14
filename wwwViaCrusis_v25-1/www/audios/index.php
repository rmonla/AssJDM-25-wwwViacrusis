<?php  
    
    $appTIT = "ViaCrusisBY_24"; 
    $appVER = "v24.5"; 
    $appVER_DESC = "Modifican audios, se duplica la música y re-genera el 100_TodoUnido."; 

echo <<<HTML

<html>
<head>
<title>$appTIT</title>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$appTIT</title>
    <style type="text/css">
        #mp3-player {
            width: 400px;
            margin: 0 auto;
        }

        ul { list-style-type: none; }

        li { margin-bottom: 10px; }
        audio { width: 100%; }
        .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        .active, .accordion:hover {
            background-color: #ccc;
        }

        .panel {
            padding: 0 18px;
            display: none;
            background-color: white;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <div id="mp3-player">
    <small style="float: right;padding-right: 0px;">$appVER</small>
        <h1>$appTIT</h1>
        <button class="accordion">1raParte</button>
        <div class="panel">
            <ul id="playlist1"></ul>
        </div>
        <button class="accordion">2daParte</button>
        <div class="panel">
            <ul id="playlist2"></ul>
        </div>
        <button class="accordion">3raParte</button>
        <div class="panel">
            <ul id="playlist3"></ul>
        </div>
    </div>
    <script type='text/javascript'>
        document.addEventListener("DOMContentLoaded", function() {
            const playlists = [
                document.getElementById("playlist1"), 
                document.getElementById("playlist2"), 
                document.getElementById("playlist3")
                ];
            const accordionButtons = document.querySelectorAll('.accordion');

            // Add event listener to accordion buttons
            accordionButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const panel = this.nextElementSibling;
                    panel.style.display = panel.style.display === 'block' ? 'none' : 'block';
                });
            });

            // Obtener archivos MP3 de las carpetas
            fetchMP3Files();

            function fetchMP3Files() {
                playlists.forEach((playlist, index) => {
                    fetch("mp3_files.php?parte=" + (index + 1))
                        .then(response => response.json())
                        .then(data => {
                            data.forEach(file => {
                                const listItem = document.createElement("li");
                                
                                const downloadButton = document.createElement("a");
                                downloadButton.href = file.path;
                                downloadButton.download = file.name;
                                downloadButton.textContent = file.tit;
                                listItem.appendChild(downloadButton);

                                const audio = document.createElement("audio");
                                audio.controls = true;
                                audio.src = file.path;
                                listItem.appendChild(audio);

                                playlist.appendChild(listItem);
                            });
                        })
                        .catch(error => console.error("Error al obtener los archivos MP3:", error));
                });
            }
        });
    </script>
</body>
</html>


HTML;

?>
