<?php
include 'html/method_get.html';

$edad = 0;
    
if (isset($_GET['verificar'])) {
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $cedula = $_GET['cc'];
    
    echo "Nombre: ".$nombre."<br>";
    echo "Apellido: ".$apellido."<br>";
    echo "Cédula: ".$cedula."<br>";

}

?>
