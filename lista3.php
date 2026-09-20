<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Lista de exercício 3</title>
</head>
<body>
    <div class="container py-3" action="lista3.php">
        <h1>Lista de exercício 3</h1>
        <form method="post">
            <h3>Exercício 1</h3>
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
                                echo "<p>Exercício 2</p>";
                                echo "<p>Maiusculo: ". strtoupper($palavra) ."</p>";
                                echo "<p>Minusculo: ". strtolower($palavra) ."</p>";
                            }
                        else
                            echo "<p>Palavra invalida</p>";
                            
                    }
            ?>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</body>
</html>