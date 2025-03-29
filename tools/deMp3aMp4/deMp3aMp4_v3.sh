#!/bin/bash

# Configuración por defecto
default_img="viacrucis.jpg"
dirMP3s="media"
dirM4As="tempVCV25"
dirMP4_OUT="output_mp4"
dirMP3_OUT="output_mp3"

# Verificar si ffmpeg está instalado
if ! command -v ffmpeg &> /dev/null; then
    echo "Error: ffmpeg no está instalado. Instálalo antes de ejecutar este script."
    exit 1
fi

# Función para limpiar nombres de archivos
clean_filename() {
    local name="$1"
    name="${name//128kbit_AAC/}"  # Eliminar "kbit_"
    name="${name// \(\)/}"  # Eliminar " ()"
    echo "$name"
}

# Mostrar menú
show_menu() {
    clear
    echo "===================================="
    echo "  CONVERSOR DE AUDIO/VIDEO          "
    echo "===================================="
    echo "1. Convertir MP3 a MP4 (con imagen)"
    echo "2. Convertir M4A a MP3"
    echo "3. Configurar carpetas"
    echo "4. Ver configuración actual"
    echo "5. Salir"
    echo "===================================="
}

# Configurar carpetas
configure_folders() {
    echo "Configuración actual:"
    echo "1. Carpeta MP3 origen: $dirMP3s"
    echo "2. Carpeta M4A origen: $dirM4As"
    echo "3. Carpeta videos destino: $dirMP4_OUT"
    echo "4. Carpeta MP3 destino: $dirMP3_OUT"
    echo "5. Imagen para videos: $default_img"
    echo "6. Volver al menú principal"
    
    read -p "Seleccione qué desea cambiar (1-6): " config_option
    
    case $config_option in
        1) read -p "Nueva carpeta MP3 origen: " dirMP3s ;;
        2) read -p "Nueva carpeta M4A origen: " dirM4As ;;
        3) read -p "Nueva carpeta videos destino: " dirMP4_OUT ;;
        4) read -p "Nueva carpeta MP3 destino: " dirMP3_OUT ;;
        5) read -p "Nueva imagen para videos: " default_img ;;
        6) return ;;
        *) echo "Opción no válida"; sleep 1 ;;
    esac
    
    mkdir -p "$dirMP3s" "$dirM4As" "$dirMP4_OUT" "$dirM_mp4P3_OUT"
}

# Mostrar configuración
show_config() {
    echo "Configuración actual:"
    echo "------------------------------------"
    echo "Carpeta MP3 origen: $dirMP3s"
    echo "Carpeta M4A origen: $dirM4As"
    echo "Carpeta videos destino: $dirMP4_OUT"
    echo "Carpeta MP3 destino: $dirMP3_OUT"
    echo "Imagen para videos: $default_img"
    echo "------------------------------------"
    read -p "Presione Enter para continuar..."
}

# Convertir MP3 a MP4
convert_mp3_to_mp4() {
    mkdir -p "$dirMP4_OUT"
    
    shopt -s nullglob
    mp3_files=("$dirMP3s"/*.mp3)
    
    if [ ${#mp3_files[@]} -eq 0 ]; then
        echo "No se encontraron archivos MP3 en $dirMP3s"
        return
    fi
    
    for archORI in "${mp3_files[@]}"; do
        BASENAME=$(basename -- "$archORI" .mp3)
        CLEAN_BASENAME=$(clean_filename "$BASENAME")
        archDST="$dirMP4_OUT/$CLEAN__mp4BASENAME.mp4"
        
        echo "Procesando: $CLEAN_BASENAME.mp3"
        
        ffmpeg -loop 1 -i "$default_img" -i "$archORI" \
               -vf "scale=trunc(iw/2)*2:trunc(ih/2)*2" \
               -c:v libx264 -c:a aac -b:a 192k \
               -shortest -pix_fmt yuv420p "$archDST"
    done
    
    echo "Conversión MP3 a MP4 completada."
    read -p "Presione Enter para continuar..."
}

# Convertir M4A a MP3
convert_m4a_to_mp3() {
    mkdir -p "$dirMP3_OUT"
    
    shopt -s nullglob
    m4a_files=("$dirM4As"/*.m4a)
    
    if [ ${#m4a_files[@]} -eq 0 ]; then
        echo "No se encontraron archivos M4A en $dirM4As"
        return
    fi
    
    for archORI in "${m4a_files[@]}"; do
        BASENAME=$(basename -- "$archORI" .m4a)
        CLEAN_BASENAME=$(clean_filename "$BASENAME")
        archDST="$dirMP3_OUT/$CLEAN_BASENAME.mp3"
        
        echo "Procesando: $CLEAN_BASENAME.m4a"
        
        ffmpeg -i "$archORI" -acodec libmp3lame -q:a 2 "$archDST"
    done
    
    echo "Conversión M4A a MP3 completada."
    read -p "Presione Enter para continuar..."
}

# Menú principal
while true; do
    show_menu
    read -p "Seleccione una opción (1-5): " option
    
    case $option in
        1) convert_mp3_to_mp4 ;;
        2) convert_m4a_to_mp3 ;;
        3) configure_folders ;;
        4) show_config ;;
        5) echo "Saliendo..."; exit 0 ;;
        *) echo "Opción no válida"; sleep 1 ;;
    esac
done
