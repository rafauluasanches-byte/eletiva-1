<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicios lista 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <div class="container py-3">
        <form method="post" action="exerciocioslista2.php">
            <h1>Exercicio 1</h1>
            <div class="mb-3">
                <label for="num" class="form-label">Digite um numero</label>
                <input type="number" id="num" name="num" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="num2" class="form-label">Digite um segundo numero</label>
                <input type="number" id="num2" name="num2" class="form-control" required="">
            </div>
			<?php
            if($_POST)
			{
				$num = $_POST['num'];
				$num2 = $_POST['num2'];
				if ($num == $num2)
				{
					$triplo = $num * 3;
					echo "<p>$triplo</p>";
				}
				else
				{
					$soma = $num + $num2;
					echo "<p>$soma</p>";
				}
            }
            ?>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>        
		
            <h1>Exercicio 2</h1>
                <div class="mb-3">
                    <label for="n1" class="form-label">Digite um numero</label>
                    <input type="number" id="n1" name="n1" class="form-control" required="">
                </div>
                <div class="mb-3">
                    <label for="n2" class="form-label">Digite um segundo numero</label>
                    <input type="number" id="n2" name="n2" class="form-control" required="">
                </div>
                <?php
                if($_POST)
                {
                    $n1 = $_POST['n1'];
                    $n2 = $_POST['n2'];
                    if ($n1 < $n2)
                        echo "<p>$n1, $n2</p>";
                    elseif ($n1 > $n2)
                        echo "<p>$n2, $n1</p>";					
                    else
                        echo "<p>Numeros iguais: $n1</p>";
                }
                ?>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
            
            <h1>Exercicio 3</h1>
                <div class="mb-3">
                    <label for="p" class="form-label">Digite o valor do produto</label>
                    <input type="number" id="p" name="p" class="form-control" required="">
                </div>
                <?php
                if($_POST)
                {
                    $p = $_POST['p'];
                    if ($p > 100)
                    {
                        $desconto = $p - ($p * 0.15);
                        echo "<p>Valor com desconto: $desconto</p>";
                    }
                    else{
                        echo "<p>Valor menor que R$100,00</p>";
                    }
                }
                ?>

            <h1>Exercício 4</h1>
                <div class="mb-3">
                    <label for="mes" class="form-label">Digite o numero do mês</label>
                    <input type="number" id="mes" name="mes" class="form-control" required="">
                </div>
                <?php
                    if($_POST)
                        {
                        $mes = $_POST['mes'];
                        switch($mes){
                            case 1:
                                echo "Janeiro";
                                break;
                            case 2:
                                echo "Fevereiro";
                                break;
                            case 3:
                                echo "Março";
                                break;
                            case 4:
                                echo "Abril";
                                break;
                            case 5:
                                echo "Maio";
                                break;
                            case 6:
                                echo "Junho";
                                break;
                            case 7:
                                echo "Julho";
                                break;
                            case 8:
                                echo "Agosto";
                                break;
                            case 9:
                                echo "Setembro";
                                break;
                            case 10:
                                echo "Outubro";
                                break;
                            case 11:
                                echo "Novembro";
                                break;
                            case 12:
                                echo "Dezembro";
                                break;
                            default:
                                echo "Valor invalido";
                                break;
                            }
                        }
                ?>
            <h1>Exercício 5</h1>
            <div>
                <button type="submit" class="btn btn-success">Enviar</button>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
            </div>
        </form>
    </div>
</body>
</html>