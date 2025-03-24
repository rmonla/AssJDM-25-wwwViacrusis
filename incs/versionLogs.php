<?php
$versionLogs = [
    '25.3' => [
        'date' => '2025-03-24',
        'changes' => [
            'Renombra archivos de audio 1ra parte a la forma XXXv25-X_...',
            'Actualiza Ultima Cena y agrega Lavado de pies.',
            'Genera Video Viral 2025',
            'Upload Todo Unido 1º y 3º parte',
            'Actualiza nueva key.',
            ],
        ],
    '25.2' => [
            'date' => '2025-03-16',
            'changes' => [
                'Actualiza valores de Titulos a Viacrusus 2025.',
                ],
            ],
    '25.1' => [
        'date' => '2025-03-10',
        'changes' => [
            'Se genera y actualiza a la nueva notacion de versionado del 5.6 a 25.1.',
            ],
        ],
    '5.6' => [
        'date' => '2025-03-25',
        'changes' => [
            'www/: Se re organiza carpetas para separar la configuración docker con la página.',
            'docker-compose: Se optimiza para que tome la ultima version de php:samba.',
            ],
        ],
    '5.5.5' => [
        'date' => '2025-02-08',
        'changes' => [
            'Test de nueva bdAudios.',
            ],
        ],
    '5.5.4' => [
        'date' => '2025-01-23',
        'changes' => [
            'Mejora la visualización del código del array audioFiles.',
            'Traslada el archivo versionLogs al directorio includes.',
            'Crea kerberos.php para prevenir la exposición accidental de archivos del directorio.',
            'Modifica y añade archivos index.php en cada directorio para reforzar la seguridad.',
            ],
        ],
    '5.5.3' => [
            'date' => '2024-12-22',
            'changes' => [
                'Reorganización de archivos y directorios, trasladándolos de la carpeta "src" a la raíz del sitio.',
                'Creación de la herramienta "Ver Versiones" (tools/verVersiones.php) para mostrar el historial de cambios.',
                'Incorporación de los botones "Anterior" y "Siguiente" en (play.php) para una navegación más intuitiva.',
                'Modificación de estilos para mejorar la apariencia de los botones (css/style.css).',
                'Separación de las cabeceras y pies de página para incluirlos de forma independiente (include/header.php y include/footer.php).',
                'Actualización de index.php y play.php para utilizar include/header.php e include/footer.php.'
            ],
        ],
    '5.5.2' => [
        'date' => '2024-12-22',
        'changes' => [
            'Actualización de cambios y detalles de versiones.',
            'Creación del *Historial de Versiones* (versionLogs.php).',
            'Actualización del audio "PCVBY1005_v2.mp3", agregando música de peregrinación de ángeles para mejorar el final.',
            'Modificación de IDs, nombres de archivos de audio y nombres para mostrar (audioFiles.php).',
        ],
    ],
    '5.5.1' => [
        'date' => '2024-12-22',
        'changes' => [
            ' FALTA CARAGAR',
        ],
    ],
    '5.4.3' => [
        'date' => '2024-12-21',
        'changes' => [
            'Mejoras significativas en la apariencia de la interfaz.',
            'Uso de JavaScript para una experiencia de usuario más interactiva.',
            'Diseño moderno con estilos avanzados.',
        ],
    ],
    '5.4.2' => [
        'date' => '2024-12-19',
        'changes' => [
            'Mejoras en la seguridad del sistema.',
            'Ocultación de la dirección física de los archivos .mp3 mediante el uso de serve.php.',
            'Validación de la existencia de archivos antes de servirlos.',
        ],
    ],
    '5.4.1' => [
        'date' => '2024-12-15',
        'changes' => [
            'Versión inicial del proyecto.',
            'Funcionalidad básica para listar y reproducir archivos .mp3.',
        ],
    ],
];

// Ordena las claves del array en orden descendente
uksort($versionLogs, 'version_compare');
$latestVersion = array_key_last($versionLogs);
$latestDetails = $versionLogs[$latestVersion];
?>
