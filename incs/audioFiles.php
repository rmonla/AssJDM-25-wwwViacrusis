<?php
// Array de archivos de audio (debería centralizarse si es muy grande)
$audioFiles = [
['id' => 'VCBY0102', 'order' => '0102', 'short_url' => '',
'filename' => '102-La_Entrada_en_Jerusalen.mp3',
'display_name' => '1ºP - La Entrada en Jerusalen'],
['id' => 'VCBY0103', 'order' => '0103', 'short_url' => '',
'filename' => '103v3-El_Trato_de_Judas_y_Caifás.mp3',
'display_name' => '1ºP - El Trato de Judas y Caifás'],
['id' => 'VCBY0104', 'order' => '0104', 'short_url' => '',
'filename' => '104v3-La_Última_Cena.mp3',
'display_name' => '1ºP - La Última Cena'],
['id' => 'VCBY0105', 'order' => '0105', 'short_url' => '',
'filename' => '105-El_Monte_de_los_olivos.mp3',
'display_name' => '1ºP - El Monte de los olivos'],
['id' => 'VCBY0106', 'order' => '0106', 'short_url' => '',
'filename' => '106-La_Entrega.mp3',
'display_name' => '1ºP - La Entrega'],
['id' => 'VCBY0107', 'order' => '0107', 'short_url' => '',
'filename' => '107-La_Negación_de_Pedro.mp3',
'display_name' => '1ºP - La Negación de Pedro'],
['id' => 'VCBY0108', 'order' => '0108', 'short_url' => '',
'filename' => '108-El_Juicio_en_San_Edrin.mp3',
'display_name' => '1ºP - El Juicio en San Edrin'],
['id' => 'VCBY0109', 'order' => '0109', 'short_url' => '',
'filename' => '109v2-La_Culpa_de_Judas.mp3',
'display_name' => '1ºP - La Culpa de Judas'],
['id' => 'VCBY0110', 'order' => '0110', 'short_url' => '',
'filename' => '110v2-Jesús_Ante_Ponsio_Pilatos.mp3',
'display_name' => '1ºP - Jesús Ante Ponsio Pilatos'],
['id' => 'VCBY0111', 'order' => '0111', 'short_url' => '',
'filename' => '111v2-Jesús_Ante_Herodes.mp3',
'display_name' => '1ºP - Jesús Ante Herodes'],
['id' => 'VCBY0112', 'order' => '0112', 'short_url' => '',
'filename' => '112v2-E01_Jesús_es_Condenado_a_Muerte.mp3',
'display_name' => '1ºP - E01 Jesús es Condenado a Muerte'],
['id' => 'VCBY0199', 'order' => '0199', 'short_url' => '',
'filename' => '199v3_TodoUnido.mp3',
'display_name' => '1ºP - Todo UNIDO'],
['id' => 'VCBY0201', 'order' => '0201', 'short_url' => '',
'filename' => '201-E02_Jesús_es_cargado_con_la_cruz.mp3',
'display_name' => '2ºP - E02 Jesús es cargado con la cruz'],
['id' => 'VCBY0202', 'order' => '0202', 'short_url' => '',
'filename' => '202-E03_Jesús_cae_por_primera_vez.mp3',
'display_name' => '2ºP - E03 Jesús cae por primera vez'],
['id' => 'VCBY0203', 'order' => '0203', 'short_url' => '',
'filename' => '203-E04_Jesús_encuentra_a_su_madre.mp3',
'display_name' => '2ºP - E04 Jesús encuentra a su madre'],
['id' => 'VCBY0204', 'order' => '0204', 'short_url' => '',
'filename' => '204-E05_Simón_de_Cirene_ayuda_a_Jesús.mp3',
'display_name' => '2ºP - E05 Simón de Cirene ayuda a Jesús'],
['id' => 'VCBY0205', 'order' => '0205', 'short_url' => '',
'filename' => '205-E06_La_Verónica_enjuga_el_rostro_de_Jesús.mp3',
'display_name' => '2ºP - E06 La Verónica enjuga el rostro de Jesús'],
['id' => 'VCBY0206', 'order' => '0206', 'short_url' => '',
'filename' => '206-E07_Jesús_cae_por_segunda_vez.mp3',
'display_name' => '2ºP - E07 Jesús cae por segunda vez'],
['id' => 'VCBY0207', 'order' => '0207', 'short_url' => '',
'filename' => '207-E08_Jesús_consuela_a_las_santas_mujeres.mp3',
'display_name' => '2ºP - E08 Jesús consuela a las santas mujeres'],
['id' => 'VCBY0300', 'order' => '0300', 'short_url' => '',
'filename' => '300_TodoUnido.mp3',
'display_name' => '3ºP - Todo UNIDO'],
['id' => 'VCBY0301', 'order' => '0301', 'short_url' => '',
'filename' => '301v2-E09_Jesús_Cae_por_Tercera_Vez.mp3',
'display_name' => '3ºP - E09 Jesús Cae por Tercera Vez'],
['id' => 'VCBY0302', 'order' => '0302', 'short_url' => '',
'filename' => '302v2-E10_Jesús_Despojado_de_sus_Vestiduras.mp3',
'display_name' => '3ºP - E10 Jesús Despojado de sus Vestiduras'],
['id' => 'VCBY0303', 'order' => '0303', 'short_url' => '',
'filename' => '303v2-E11_Jesús_es_Clavado_en_la_Cruz.mp3',
'display_name' => '3ºP - E11 Jesús es Clavado en la Cruz'],
['id' => 'VCBY0304', 'order' => '0304', 'short_url' => '',
'filename' => '304v2-E12_Jesús_Muere_en_la_Cruz.mp3',
'display_name' => '3ºP - E12 Jesús Muere en la Cruz'],
['id' => 'VCBY0305', 'order' => '0305', 'short_url' => '',
'filename' => '305v2-E13_Jesús_es_Bajado_de_la_Cruz.mp3',
'display_name' => '3ºP - E13 Jesús es Bajado de la Cruz'],
['id' => 'VCBY0306', 'order' => '0306', 'short_url' => '',
'filename' => '306v2-E14_El_Cuerpo_de_Jesús_Depositado_en_el_Sepulcro.mp3',
'display_name' => '3ºP - E14 El Cuerpo de Jesús Depositado en el Sepulcro'],
['id' => 'VCBY0307', 'order' => '0307', 'short_url' => '',
'filename' => '307v2-La_Puerta_de_Piedra.mp3',
'display_name' => '3ºP - La Puerta de Piedra'],
['id' => 'VCBY0308', 'order' => '0308', 'short_url' => '',
'filename' => '308v2-El_Sepulcro.mp3',
'display_name' => '3ºP - El Sepulcro'],
['id' => 'VCBY0309', 'order' => '0309', 'short_url' => '',
'filename' => '309v2-El_Anuncio_de_la_Resurección.mp3',
'display_name' => '3ºP - El Anuncio de la Resurección']
];