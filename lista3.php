<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Lista de exercício 3</title>
    <style>
        p {
            font-size: 20px; color: #00087ad7;
        }
    </style>
</head>
<body>
    <div class="container py-3" action="lista3.php">
        <h1>Lista de exercício 3</h1>
        <form method="post">
            <h3>Exercício 1 e 2</h3>
            <div class="mb-3">
              <label for="palavra" class="form-label">Insira uma palavra</label>
              <input type="text" id="palavra" name="palavra" class="form-control" required="">
            </div>
            <?php
                if($_POST)
                    {
                        $palavra = $_POST['palavra'];
                        if($palavra != "")
                            {
                                $qtd = strlen($palavra);
                                echo "<p>Quantidade de caracteres: $qtd</p>";
                                echo "<h4>Exercício 2</h4>";
                                echo "<p>Maiusculo: ". strtoupper($palavra) ."</p>";
                                echo "<p>Minusculo: ". strtolower($palavra) ."</p>";
                            }
                        else
                            echo "<p>Palavra invalida</p>";
                    }
            ?>
            <h3>Exercício 3</h3>
            <div class="mb-3">
              <label for="palavra1" class="form-label">Insira uma palavra</label>
              <input type="text" id="palavra1" name="palavra1" class="form-control" required="">
            </div>
            <div class="mb-3">
              <label for="palavra2" class="form-label">Insira outra palavra</label>
              <input type="text" id="palavra2" name="palavra2" class="form-control" required="">
            </div>
            <?php
                if($_POST)
                    {
                        
                        $palavra1 = $_POST['palavra1'];
                        $palavra2 = $_POST['palavra2'];
                        if(strpos($palavra1, $palavra2) !== false)
                            echo "<p>$palavra2 esta contida em $palavra1</p>";
                        else
                            echo "<p>$palavra2 NÃO esta contida em $palavra1</p>";
                    }
            ?>
            <h3>Exercício 4</h3>
            <div class="mb-3">
              <label for="dia" class="form-label">Digite o dia</label>
              <input type="number" id="dia" name="dia" class="form-control" required="">
            </div>
            <div class="mb-3">
              <label for="mes" class="form-label">Digite o mês</label>
              <input type="number" id="mes" name="mes" class="form-control" required="">
            </div>
            <div class="mb-3">
              <label for="ano" class="form-label">Digite o ano</label>
              <input type="number" id="ano" name="ano" class="form-control" required="">
            </div>
            <?php
                if($_POST)
                    {
                        $dia = $_POST['dia'];
                        $mes = $_POST['mes'];
                        $ano = $_POST['ano'];
                        if($dia >= 1 and $dia <= 31 and $mes >= 1 and $mes <= 12 and $ano >= 1 and $ano <= 9999)
                            {
                                echo "Data correta";
                                echo "<p>$dia/$mes/$ano</p>";
                            }
                        else
                            echo "<p>Data invalida</p>";
                    }
            ?>
            <h3>Exercício 5</h3>
            <div class="mb-3">
              <label for="n" class="form-label">Digite um número</label>
              <input type="number" id="n" name="n" class="form-control" required="">
            </div>
            <?php
                if($_POST)
                    {
                        $n = $_POST['n'];
                        $raiz = $n ** 2;
                        echo "<p>Raiz quadrada de $n é $raiz</p>";
                    }
            ?>
            <h3>Exercício 6</h3>
            <div class="mb-3">
              <label for="n1" class="form-label">Digite um número com casa decimal</label>
              <input type="number" id="n1" name="n1" step="any" class="form-control" required="">
            </div>
            <?php
                if($_POST)
                    {
                        $n1 = $_POST['n1'];
                        echo "<p>Número: $n1</p>";
                        echo "<p>Arredondado para cima: ". ceil($n1). "</p>";
                        echo "<p>Arredondado para baixo: ". floor($n1). "</p>";
                        echo "<p>Arredondado: ". round($n1). "</p>";
                    }
            ?>
            <h3>Exercício 7</h3>
            <div class="mb-3">
              <label for="p" class="form-label">Digite uma palavra</label>
              <input type="text" id="p" name="p" class="form-control" required="">
            </div>
            <?php
                if($_POST)
                    {   
                        $p = $_POST['p'];
                        if($p != "" and $p != " ")
                            {
                                echo "<p>Palavra: $p</p>";
                                echo "<p>Ao contrario: ". strrev($p). "</p>";
                            }
                    }
            ?>
            <h3>Exercício 8</h3>
            <div class="mb-3">
              <label for="frase" class="form-label">Digite uma frase</label>
              <input type="text" id="frase" name="frase" class="form-control" required="">
            </div>
            <?php
                if($_POST)
                    {   
                        $frase = strtolower($_POST['frase']);
                        if($frase != "")
                            {
                                echo "<p>Frase: $frase</p>";
                                $cont = substr_count($frase,"a") +
                                substr_count($frase,"e") +
                                substr_count($frase,"i") +
                                substr_count($frase,"o") +
                                substr_count($frase,"u");
                                echo "<p>Existem $cont vogais nesta frase</p>";
                            }
                    }
            ?>
            <h3>Exercício 9</h3>
            <div class="mb-3">
              <label for="frase1" class="form-label">Digite uma frase</label>
              <input type="text" id="frase1" name="frase1" class="form-control" required="">
            </div>
            <?php
                if($_POST)
                    {   
                        $frase1 = $_POST['frase1'];
                        if($frase != "")
                            {
                                echo "<p>Frase: $frase1</p>";
                                echo "<p>Sem espaços no começo e fim: ". trim($frase1). "</p>";
                                echo "<p>Sem espaços: ". str_replace(" ", "", $frase1). "</p>";
                            }
                    }
            ?>
            <h3>Exercício 10</h3>
            <div class="mb-3">
              <label for="nome" class="form-label">Digite seu nome completo</label>
              <input type="text" id="nome" name="nome" class="form-control" required="">
            </div>
            <?php
                if($_POST)
                    {   
                        $nome = strtoupper($_POST['nome']);
                        $nomes = explode(" ", $nome);
                        if($nome != "")
                            {
                                foreach ($nomes as $nome) 
                                {
                                    echo substr($nome, 0, 1) . ".";
                                }
                            }
                    }
            ?>
            <h3>Exercício 11</h3>
            <div class="mb-3">
              <label for="valor" class="form-label">Informe um valor</label>
              <input type="text" id="valor" name="valor" class="form-control" required="">
            </div>
            <?php
                if($_POST)
                    {   
                        $valor = $_POST['valor'];
                        echo "<p>R$".number_format($valor, 2, ',', '.')."</p>";
                    }
            ?>
            <h3>Exercício 12</h3>
            <?php
                $senha = "";
                for ($i = 0; $i < 8; $i++)
                    { 
                        $t = rand(1, 2); 
                        if ($t == 1) 
                            $senha = $senha . chr(rand(65, 90)); 
                        else 
                            $senha = $senha . rand(0, 9); 
                    } 
                    echo "<p>Senha: " .$senha."</p>";
            ?>
            <h3>Exercício 13</h3>
            <div class="mb-3">
              <label for="frase2" class="form-label">Digite uma frase</label>
              <input type="text" id="frase2" name="frase2" class="form-control" required="">
            </div>
            <?php
                if($_POST)
                    {   
                        $frase2 = trim($_POST["frase2"]); 
                        $palavras = str_word_count($frase2); 
                        $lista = str_word_count($frase2, 1); 
                        $maior = ""; 
                        foreach ($lista as $palavra3) { 
                            if (strlen($palavra3) > strlen($maior)) 
                                { $maior = $palavra3; } 
                            }
                            echo "<p>Número de palavras: " . $palavras . "</p>"; 
                            echo "<p>Maior palavra: " . $maior . "</p>";
                    }
            ?>
            <h3>Exercício 14</h3>
            <div class="mb-3">
              <label for="p2" class="form-label">Digite uma palavra</label>
              <input type="text" id="p2" name="p2" class="form-control" required="">
            </div>
            <?php
                if($_POST)
                    {   
                        $p2 = $_POST["p2"];
                        $p3 = strrev($p2);
                        if ($p3 == $p2)
                            echo "<p>$p2 é um palindromo</p>";
                        else
                            echo "<p>$p2 não é um palindromo</p>";
                    }
            ?>
            <h3>Exercício 15</h3>
            <div class="mb-3">
              <label for="email" class="form-label">Digite uma frase</label>
              <input type="email" id="email" name="email" class="form-control" required="">
            </div>
            <?php
                if($_POST)
                    {   
                        $email = $_POST["email"];
                        $dom = explode("@", $email);
                        echo "<p>Domínio: $dom[1] </p>";
                    }
            ?>
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</body>
</html>