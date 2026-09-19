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

		echo "<p>Exercício 9</p>";
        $altR = $_POST['altR'];
		$largR = $_POST['largR'];
		$perimetroRetangulo = ($altR * 2) + ($largR * 2);
		echo "<p>O perimetro do retangulo é: $perimetroRetangulo</p>";
		
		echo "<p>Exercício 10</p>";
		$r1 = $_POST['r1'];
		$pi = 3.1415;
		$perimetroCirculo = 2 * $pi * $r1;
		echo "<p>O perimetro do circulo é: $perimetroCirculo</p>";
		
		echo "<p>Exercício 11</p>";
		$base = $_POST['base'];
		$expoente = $_POST['expoente'];
		$potencia = $base ** $expoente;
		echo "<p>$potencia</p>";
		
		echo "<p>Exercício 12</p>";
		$metro = $_POST['metro'];
		$centimetro = $metro * 100;
		echo "<p>$centimetro cm</p>";
		
		echo "<p>Exercício 13</p>";
		$km = $_POST['km'];
		$milha = $km / 1.609;
		echo "<p>milha: $milha</p>";
		
		echo "<p>Exercício 14</p>";
		$peso = $_POST['peso'];
		$alt = $_POST['alt'];
		$imc = $peso / $altura ** 2;
		echo "<p>I.M.C: $imc</p>";
		
		echo "<p>Exercício 15</p>";
		$preco = $_POST['preco'];
		$desconto = $_POST['desconto'];
		$precoDesc = $preco - ($preco * ($desconto / 100) );
		echo "<p>preco com desconto: $precoDesc</p>";
		
		echo "<p>Exercício 16</p>";
		$capital1 = $_POST['capital1'];
		$taxa1 = $_POST['taxa1'];
		$periodo1 = $_POST['periodo1'];
		$jurosS = $capital1 * $taxa1 * $periodo1;
		echo "<p>Juros Simples: $jurosS</p>";
		
		echo "<p>Exercício 17</p>";
		$capital2 = $_POST['capital2'];
		$taxa2 = $_POST['taxa2'];
		$periodo2 = $_POST['periodo2'];
		$jurosC = $capital2 * (1 + $taxa2) ** $periodo2;
		echo "<p>Juros Compostos: $jurosC</p>";
		
		echo "<p>Exercício 18</p>";
		$dias = $_POST['dias'];
		$hora = $dias * 24;
		$min = $hora * 60;
		$seg = $min * 60;
		echo "<p>Hora: $hora - Minuto: $min - Segundo: $seg</p>";
		
		echo "<p>Exercício 19</p>";
		$dist = $_POST['dist'];
		$tempo = $_POST['tempo'];
		if($tempo != 0)
            {
                $vm = $dist / $tempo;
			    echo "<p>$vm</p>";
            }
        else
			echo "<p>Divisão por zero</p>";
    }
?>