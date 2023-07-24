<?php

include 'html/mayor_menor.html';

$edad = 0;

if (isset($_POST['verificar'])) {
    $edad = $_POST['edad'];

    if ($edad >= 18) {
        echo "<h1>Es mayor de edad</h1>";
    }
    else if (18 > $edad && 0 < $edad) {
        echo "<h1>Es menor de edad</h1>";
    }else{
        echo "<h1>No valido</h1>";
    }

}

?>