<?php

include 'html/edad_exacta.html';

    if (isset($_POST['verificar'])) {
        $f_n = new DateTime($_POST['f_n']);
        $date2 = new DateTime(date("Y-m-d"));

        $diff = $f_n->diff($date2);

        $edad_actual = $diff->y;
        $edad_meses = $diff->m;
        $edad_dias = $diff->d;

        echo "Años: ".$edad_actual." Meses: ".$edad_meses." Días: ".$edad_dias;
    }
    ?>