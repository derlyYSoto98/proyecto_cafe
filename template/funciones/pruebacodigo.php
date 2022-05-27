<?php
include '../conexion.php';
include '../phpqrcode/qrlib.php';

$dir = '../codigos/';

if (!file_exists($dir)) 
    mkdir($dir);

$filename = $dir.'codigo.png';

$tamaño = 10; //Tamaño de Pixel
	$level = 'L'; //Precisión Baja
	$framSize = 3; //Tamaño en blanco
	$contenido = "http://localhost/cafe/template/funciones/consulta_qr.php"; //Texto
   
    QRcode::png($contenido, $filename, $level, $tamaño, $framSize); 
    echo '<img src="'.$dir.basename($filename).'" /><hr/>'; 
?>
