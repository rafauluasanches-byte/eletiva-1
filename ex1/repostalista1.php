<?php
    if ($_POST)
    {
        echo "<p>Exercício 5</p>";
        $tempc = $_POST['tempc'];
        $tempf = ($tempc * 1.8) + 32;
        echo "<p>$tempc em graus fahrenheit é $tempf</p>";

        echo "<p>Exercício 6</p>";
        $tf = $_POST['tf'];
        $tc = (5 * ($tf - 32)) / 9;
        echo "<p>$tf em graus celcius é $tc</p>";

        echo "<p>Exercício 7</p>";
        $altura = $_POST['altura'];
        $largura = $_POST['largura'];
        $area = $altura * $largura;
        echo "<p>Área: $area</p>";

        echo "<p>Exercício 8</p>";
        $raio = $_POST['raio'];
        $pi = 3.1415;
        $areaC = $pi * $raio ** 2;
        echo "<p>Area do circulo $areaC</p>";

    }
?>