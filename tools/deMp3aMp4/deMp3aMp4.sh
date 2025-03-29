#!/bin/bash

# ./deMp3aMp4.sh ../../media/

# Verificar si se pasó un argumento
if [ "$#" -ne 1 ]; then
    echo "Uso: $0 <carpeta_mp3>"
    exit 1
fi

dirMP3s="$1"
archIMG="viacrucis.jpg"
dirDST="output_videos"

# Crear la carpeta de destino si no existe
mkdir -p "$dirDST"

# Verificar si hay archivos MP3 en la carpeta
shopt -s nullglob  # Evita errores si no hay archivos .mp3
mp3_files=("$dirMP3s"/*.mp3)

if [ ${#mp3_files[@]} -eq 0 ]; then
    echo "No se encontraron archivos MP3 en la carpeta."
    exit 1
fi

# Recorrer todos los archivos MP3 en la carpeta
for archORI in "${mp3_files[@]}"; do
    # Obtener el nombre base del archivo sin extensión
    BASENAME=$(basename -- "$archORI" .mp3)

    # Definir el nombre del archivo de salida
    archDST="$dirDST/$BASENAME.mp4"

    # Ejecutar ffmpeg
    ffmpeg -loop 1 -i "$archIMG" -i "$archORI" -vf "scale=trunc(iw/2)*2:trunc(ih/2)*2" \
           -c:v libx264 -c:a aac -b:a 192k -shortest -pix_fmt yuv420p "$archDST"

done

echo "Proceso completado."