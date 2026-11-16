<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Novo Cliente</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    </head>
    <body> 
        <div class="container py-3">
            <h1>Novo Cliente</h1>
            <form method="post">
                <div class="mb-3">
                    <label for="nomeCli" class="form-label">Informe o nome</label>
                    <input type="text" id="nomeCli" name="nomeCli" class="form-control" required="">
                </div>
                <div class="mb-3">
                    <label for="telefoneCli" class="form-label">Informe o telefone</label>
                    <input type="text" id="telefoneCli" name="telefoneCli" class="form-control" required="">
                </div>
                <div class="mb-3">
                    <label for="cpfCli" class="form-label">Informe o CPF</label>
                    <input type="text" id="cpfCli" name="cpfCli" class="form-control" required="">
                </div>
                <div class="mb-3">
                    <label for="enderecoCli" class="form-label">Informe o endereço</label>
                    <input type="text" id="enderecoCli" name="enderecoCli" class="form-control" required="">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $nomeCli = $_POST['nomeCli'];
                    $telefoneCli = $_POST['telefoneCli'];
                    $cpfCli = $_POST['cpfCli'];
                    $enderecoCli = $_POST['enderecoCli'];
                    require_once("conexao.php");
                    $sql = "INSERT INTO cliente (nomeCli, telefoneCli, cpfCli, enderecoCli) VALUES (:nomeCli, :telefoneCli, :cpfCli, :enderecoCli)";
                    $resultado = $con->prepare($sql);
                    $resultado->bindParam(":nomeCli", $nomeCli);
                    $resultado->bindParam(":telefoneCli", $telefoneCli);
                    $resultado->bindParam(":cpfCli", $cpfCli);
                    $resultado->bindParam(":enderecoCli", $enderecoCli);
                    if($resultado->execute())
                        echo "<p>Inserido com sucesso!</p>";
                    else   
                        echo "<p>Erro ao inserir!</p>";

                }
            ?>
            <a href="indexCli.php">Voltar</a>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        </div>
    </body>
</html>