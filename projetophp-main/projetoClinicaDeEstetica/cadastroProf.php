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
                    <label for="nomeProfi" class="form-label">Informe o nome do Profissional</label>
                    <input type="text" id="nomeProfi" name="nomeProfi" class="form-control" required="">
                </div>
                <div class="mb-3">
                    <label for="telefoneProfi" class="form-label">Informe o telefone</label>
                    <input type="text" id="telefoneProfi" name="telefoneProfi" class="form-control" required="">
                </div>
                <div class="mb-3">
                    <label for="cnpjProfi" class="form-label">Informe o CNPJ</label>
                    <input type="text" id="cnpjProfi" name="cnpjProfi" class="form-control" required="">
                </div>
                <div class="mb-3">
                    <label for="enderecoProfi" class="form-label">Informe o endereço</label>
                    <input type="text" id="enderecoProfi" name="enderecoProfi" class="form-control" required="">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $nomeProfi = $_POST['nomeProfi'];
                    $telefoneProfi = $_POST['telefoneProfi'];
                    $cnpjProfi = $_POST['cnpjProfi'];
                    $enderecoProfi = $_POST['enderecoProfi'];
                    require_once("conexao.php");
                    $sql = "INSERT INTO profissionais (nomeProfi, telefoneProfi, cnpjProfi, enderecoProfi) VALUES (:nomeProfi, :telefoneProfi, :cnpjProfi, :enderecoProfi)";
                    $resultado = $con->prepare($sql);
                    $resultado->bindParam(":nomeProfi", $nomeProfi);
                    $resultado->bindParam(":telefoneProfi", $telefoneProfi);
                    $resultado->bindParam(":cnpjProfi", $cnpjProfi);
                    $resultado->bindParam(":enderecoProfi", $enderecoProfi);
                    if($resultado->execute())
                        echo "<p>Inserido com sucesso!</p>";
                    else   
                        echo "<p>Erro ao inserir!</p>";

                }
            ?>
            <a href="indexProf.php">Voltar</a>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        </div>
    </body>
</html>