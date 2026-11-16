<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Novo Profissional</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    </head>
    <body> 
        <div class="container py-3">
            <h1>Novo Profissional</h1>
            <form method="post">
                <div class="mb-3">
                    <label for="nomeProc" class="form-label">Informe o nome do Profissional</label>
                    <input type="text" id="nomeProfi" name="nomeProc" class="form-control" required="">
                </div>
                <div class="mb-3">
                    <label for="preco" class="form-label">Informe o preço</label>
                    <input type="number" id="preco" name="preco" class="form-control" required="">
                </div>
                <div class="mb-3">
                    <label for="profi" class="form-label">Informe o profissional</label>
                    <input type="text" id="profi" name="profi" class="form-control" required="">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $nomeProfi = $_POST['nomeProc'];
                    $preco = $_POST['preco'];
                    $profi = $_POST['profi'];
                    require_once("conexao.php");
                    $sql = "INSERT INTO procedimentos (nomeProc, preco, profi) VALUES (:nomeProc, :preco, :profi)";
                    $resultado = $con->prepare($sql);
                    $resultado->bindParam(":nomeProc", $nomeProc);
                    $resultado->bindParam(":preco", $preco);
                    $resultado->bindParam(":profi", $profi);
                    if($resultado->execute())
                        echo "<p>Inserido com sucesso!</p>";
                    else   
                        echo "<p>Erro ao inserir!</p>";

                }
            ?>
            <a href="indexProc.php">Voltar</a>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        </div>
    </body>
</html>